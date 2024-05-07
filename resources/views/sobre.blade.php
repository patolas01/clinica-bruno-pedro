@extends('layouts.master')
@section('title', 'Sobre - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
<link rel="stylesheet" href="{{ asset('css/sobre.css') }}">
@endsection

@section('content')

<div class="titulo">Sobre Nós</div>
<div class="divisorbloco">
    <div class="linha"></div>
</div>

<section id="main2">
    <div class="informacao multi-paragrafos">
        <h2>Política de privacidade</h2>
        <p class="primeiro-paragrafo">O site de Clínica Dentária Bruno & Pedro é propriedade de Clínica Dentária Bruno & Pedro, que é uma controladora dos seus dados pessoais.</p>
        <p class="primeiro-paragrafo">Nós adotamos esta Política de Privacidade, que determina como processamos as informações recolhidas por Clínica Dentária Bruno & Pedro, que também fornece os motivos pelos quais devemos recolher certos dados pessoais sobre si. Portanto, deve ler esta Política de Privacidade antes de usar o site Clínica Dentária Bruno & Pedro.</p>
        <p>Cuidamos dos seus dados pessoais e comprometemo-nos a garantir a sua confidencialidade e segurança.</p>
    </div>
    <div class="informacao">
        <h2>Informações pessoais que recolhemos:</h2>
        <p>Quando visita Clínica Dentária Bruno & Pedro, recolhemos automaticamente certas informações sobre o seu dispositivo, incluindo informações sobre o seu browser, endereço IP, fuso horário, e alguns dos cookies instalados no seu dispositivo. Além disso, conforme navega no Site, recolhemos informações sobre as páginas da web ou produtos individuais que visualiza, quais sites ou termos de pesquisa o direcionaram ao site e como interage com o site. Referimo-nos a essas informações recolhidas automaticamente como “Informações do dispositivo”. Além disso, podemos recolher os dados pessoais que nos fornece (incluindo, mas não se limitando a Nome, Apelido, Morada, Informações de pagamento, etc.) durante o registo para poder cumprir o acordo.</p>
    </div>
    <div class="informacao multi-paragrafos">
        <h2>Porque processamos os seus dados?</h2>
        <p class="primeiro-paragrafo">A nossa principal prioridade é a segurança dos dados do cliente e, como tal, podemos processar apenas dados mínimos do utilizador, apenas o que for absolutamente necessário para manter o site. As informações recolhidas automaticamente são usadas apenas para identificar casos potenciais de abuso e estabelecer informações estatísticas sobre o uso do site. Essas informações estatísticas não são agregadas de outra forma que identifiquem qualquer utilizador específico do sistema.</p>
        <p>Pode visitar o site sem nos dizer quem é ou revelar qualquer informação, pela qual alguém possa identificá-lo como um indivíduo específico e identificável. Se, no entanto, deseja utilizar alguns dos recursos do site, ou deseja receber a nossa newsletter ou fornecer outros detalhes preenchendo um formulário, pode-nos fornecer dados pessoais, como o seu email, nome, apelido, cidade de residência, organização, número de telefone. Pode optar por não nos fornecer os seus dados pessoais, mas talvez não consiga tirar proveito de alguns dos recursos do site. Por exemplo, não poderá receber o nosso boletim informativo ou entrar em contato conosco diretamente do site. Os utilizadores que não têm certeza sobre quais informações são obrigatórias podem entrar em contato conosco através de bruno_pedro.lda@hotmail.com.</p>
    </div>
    <div class="informacao multi-paragrafos">
        <h2>Os seus direitos:</h2>
        <p class="primeiro-paragrafo">Se é um residente europeu, tem os seguintes direitos relacionados aos seus dados pessoais:</p>
            <ul class="direitos">
                <li class="listadireitos">O direito de ser informado.</li>
                <li class="listadireitos">O direito de acesso.</li>
                <li class="listadireitos">O direito à retificação.</li>
                <li class="listadireitos">O direito de apagar.</li>
                <li class="listadireitos">O direito de restringir o processamento.</li>
                <li class="listadireitos">O direito à portabilidade de dados.</li>
                <li class="listadireitos">O direito de se opor.</li>
                <li class="listadireitos">Direitos em relação à tomada de decisão automatizada e definição de perfis.</li>
            </ul>
        <p class="primeiro-paragrafo">Se desejar exercer esse direito, entre em contato conosco por meio das informações de contato abaixo.</p>
        <p>Além disso, se é um residente europeu, note que estamos processando suas informações para cumprir contratos que possamos ter consigo (por exemplo, se fizer um pedido através do Site), ou de outra forma para buscar os nossos interesses comerciais legítimos listados acima. Além disso, observe que suas informações podem ser transferidas para fora da Europa, incluindo Canadá e Estados Unidos.</p>
    </div>
    <div class="informacao">
        <h2>Links para outros sites:</h2>
        <p>O nosso site pode conter links para outros sites que não são de nossa propriedade ou controlados por nós. Esteja ciente de que não somos responsáveis por outros sites ou práticas de privacidade de terceiros. Incentivamos a estar atento ao sair do nosso site e ler as declarações de privacidade de cada site que possa recolher informações pessoais.</p>
    </div>
    <div class="informacao">
        <h2>Segurança da informação:</h2>
        <p>Protegemos as informações que nos fornece nos servidores de computador num ambiente controlado e seguro, protegido contra acesso, uso ou divulgação não autorizados. Mantemos salvaguardas administrativas, técnicas e físicas razoáveis para proteger contra acesso não autorizado, uso, modificação e divulgação de dados pessoais no seu controlo e custódia. No entanto, nenhuma transmissão de dados pela Internet ou rede sem fio pode ser garantida.</p>
    </div>
    <div class="informacao">
        <h2>Divulgação legal:</h2>
        <p>Divulgaremos todas as informações que recolhermos, usarmos ou recebermos se exigido ou permitido por lei, como para cumprir uma intimação ou processo legal semelhante, e quando acreditar de boa fé que a divulgação é necessária para proteger os nossos direitos, proteger a sua segurança ou a segurança de outras pessoas, investigar fraudes ou responder a uma solicitação governamental.</p>
    </div>
    <div class="informacao">
        <h2>Informações de contacto:</h2>
        <p>Se desejar entrar em contacto conosco para entender mais sobre esta Política ou se quiser falar sobre qualquer assunto relacionado aos direitos individuais e as suas informações pessoais, pode enviar um email para bruno_pedro.lda@hotmail.com.</p>
    </div>
</section>

@endsection
@section('moreScripts')
        <script src="{{ asset('js/form.js') }}"></script>
        <script src="{{ asset('js/upbuton.js') }}"></script>
    @endsection
