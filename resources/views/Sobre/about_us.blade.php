@include('partials.header');

<div class="container">
    <h2>Somos a concessionária Hope</h2>

    <div class="accordion m-4" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                <strong>Sobre nós</strong>
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <strong>História:</strong> Fundada em 2021, entramos no mercado de automóveis para fazer a diferença. Focada em conforto, segurança, inovação e tecnologia, somos a sua <mark>esperança</mark> para um novo carro na garagem. Nossa empresa existe para que qualquer pessoa tenha a possibilidade de adquirir o carro dos seus sonhos, nosso propósito é dar esperança para as pessoas que nem tudo que é bom é caro.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                <strong>Contatos para suporte</strong>
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Celular:</strong> (88) 9 9954-1750</li>
                    <li class="list-group-item"><strong>Telefone fixo:</strong> (85) 9 9964-0098</li>
                </ul>
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                <strong>Horário de atendimento</strong>
            </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
                <strong>Suporte aberto 24 horas por dia, todos os dias da semana.</strong>
            </div>
            </div>
        </div>
    </div>

    <h2>Redes sociais:</h2>
    
    <div class="d-flex justify-content-center gap-3 m-4">
        <a href="https://api.whatsapp.com/send?phone=5588999541750&text=Ol%C3%A1,%20vim%20pelo%20site%20da%20Concession%C3%A1ria%20Hope" title="Mandar uma mensagem para o WhatsApp da Concessionária Hope" target="_blank" class="btn" style="background-color: #128C7E; font-size: 48px">
            <i class="fab fa-whatsapp" style="color: white"></i>
        </a>
        <a href="https://www.instagram.com/vinicius.armand0/" title="Ver o Instagram da Concessionária Hope" target="_blank" class="btn" style="background-color: #833AB4; font-size: 48px">
            <i class="fab fa-instagram" style="color: white"></i>
        </a>
        <a href="https://www.facebook.com/armando.vinicius/" title="Ver o Facebook da Concessionária Hope" target="_blank" class="btn" style="background-color: #4267B2; font-size: 48px">
            <i class="fab fa-facebook" style="color: white"></i>
        </a>
    </div>
</div>

@include('partials.footer');