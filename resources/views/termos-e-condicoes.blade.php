@extends('layouts.master')

@section('title', 'Termos e Condições - Clínica Dentária Bruno & Pedro')

@section('moreCSS')
<link rel="stylesheet" href="{{ asset('css/termoscondicoes.css') }}">
@endsection

@section('content')

<div class="titulo">Termos e Condições</div>
<div class="divisorbloco">
    <div class="linha"></div>
</div>

<section id="main2">
    <div class="informacao">
        <h2>1. Aceitação dos Termos e Condições</h2>
        <p>1.1 Ao aceder e utilizar o site da Clínica Dentária Bruno & Pedro, você concorda em respeitar e cumprir estes Termos e Condições. Se não concordar com qualquer parte destes termos, por favor, não utilize o site.</p>
    </div>
    <div class="informacao multi-paragrafos">
        <h2>2. Informação Médica e Conteúdo do Site</h2>
        <p class="primeiro-paragrafo">2.1 O conteúdo do site é fornecido apenas para fins informativos e educativos. Não constitui aconselhamento médico profissional.</p>
        <p>2.2 A Clínica Dentária Bruno & Pedro não se responsabiliza pela precisão, integridade ou atualidade das informações fornecidas no site.</p>
    </div>
    <div class="informacao multi-paragrafos">
        <h2>3. Responsabilidade e Uso Adequado</h2>
        <p class="primeiro-paragrafo">3.1 O utilizador é inteiramente responsável pelo uso do site e das informações nele contidas.</p>
        <p>3.2 A Clínica Dentária Bruno & Pedro não se responsabiliza por quaisquer danos diretos, indiretos, incidentais, consequentes ou punitivos resultantes do acesso ou uso do site.</p>
    </div>
    <div class="informacao">
        <h2>4. Privacidade e Proteção de Dados</h2>
        <p>4.1 Ao utilizar o site, o utilizador consente com a recolha e utilização de informações pessoais de acordo com a Política de Privacidade da Clínica Dentária Bruno & Pedro.</p>
    </div>
    <div class="informacao multi-paragrafos">
        <h2>5. Propriedade Intelectual</h2>
        <p class="primeiro-paragrafo">5.1 Todo o conteúdo do site, incluindo texto, gráficos, logótipos e imagens, é propriedade exclusiva da Clínica Dentária Bruno & Pedro ou de terceiros com licença de uso.</p>
        <p>5.2 É estritamente proibida a reprodução, distribuição ou utilização não autorizada do conteúdo do site.</p>
    </div>
    <div class="informacao">
        <h2>6. Isenção de Responsabilidade Médica</h2>
        <p>6.1 Nenhuma informação no site pretende substituir o aconselhamento médico profissional. Recomendamos que os utilizadores procurem a orientação de um profissional de saúde qualificado para questões médicas.</p>
    </div>
    <div class="informacao">
        <h2>7. Alterações nos Termos e Condições</h2>
        <p>7.1 A Clínica Dentária Bruno & Pedro reserva-se o direito de alterar estes Termos e Condições a qualquer momento. As alterações entrarão em vigor após a sua publicação no site.</p>
    </div>
    <div class="informacao">
        <h2>8. Links para Terceiros</h2>
        <p>8.1 O site pode conter links para sites de terceiros. A Clínica Dentária Bruno & Pedro não controla esses sites e não assume responsabilidade pelo seu conteúdo.</p>
    </div>
    <div class="informacao multi-paragrafos">
        <h2>9. Exoneração de Responsabilidade Abrangente</h2>
        <p class="primeiro-paragrafo">9.1 O utilizador concorda em isentar a Clínica Dentária Bruno & Pedro e os seus representantes de qualquer responsabilidade por perdas, danos, custos ou despesas resultantes do uso ou incapacidade de usar o site.</p>
        <p>9.2 Esta exoneração de responsabilidade abrange todas as reclamações, incluindo, mas não se limitando a, negligência, difamação, violação de direitos de propriedade intelectual e violação de privacidade.</p>
    </div>
</section>

@endsection
