<div id="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.8651250480975!2d-44.01635246312826!3d-19.93008769553223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa697401e4ccac9%3A0x74bdb9ad5e521b8d!2sArena%20MRV!5e0!3m2!1spt-BR!2sbr!4v1755106992093!5m2!1spt-BR!2sbr"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
<div class="contato-container">
    <div class="center">
        <form action="https://formspree.io/f/mbljrdne" method="post" role="form" class="php-email-form"
              id="my-form">
            <input type="text" name="nome" id="name" placeholder="Nome...">
            <div></div>
            <input type="text" name="email" id="email" placeholder="E-Mail...">
            <div></div>
            <input type="text" name="telefone" id="phone" placeholder="Telefone...">
            <div></div>
            <textarea name="mensagem" placeholder="Sua mensagem ... "></textarea>
            <div></div>
            <input type="submit" value="Enviar" name="acao" id="my-form-button">
            <p id="my-form-status"></p>
        </form>
    </div>
</div>

<!--Envio de email-->
<script>
    var form = document.getElementById("my-form");

    async function handleSubmit(event) {
        event.preventDefault();
        var status = document.getElementById("my-form-status");
        var data = new FormData(event.target);
        fetch(event.target.action, {
            method: form.method,
            body: data,
            headers: {
                'Accept': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
                status.innerHTML = "Obrigado pelo contato! Em breve retornaremos.";
                form.reset()
            } else {
                response.json().then(data => {
                    if (Object.hasOwn(data, 'errors')) {
                        status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
                    } else {
                        status.innerHTML = "Oops! Houve um erro no envio do formulário! Favor enviar um email para o contato ao lado ;)"
                    }
                })
            }
        }).catch(error => {
            status.innerHTML = "Oops! Houve um erro no envio do formulário! Favor enviar um email para o contato ao lado ;)"
        });
    }
    form.addEventListener("submit", handleSubmit)
</script>
<!--Fim envio email-->