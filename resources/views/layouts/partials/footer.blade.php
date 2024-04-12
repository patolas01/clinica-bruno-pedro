<footer class="footer">
    <div class="container-footer">
        <div class="upper-footer">

            <div class="esquerda">
                <div class="logofooter"><img src="{{ asset('img/Logo BrunoPedro.png') }}" alt="logo clinica"></div>
                <div class="descricao">Tratamentos de qualidade ao nivel da Medicina Oral.</div>
                <div class="descricao1">Onde cada Doente é um Amigo e o sorriso é levado muito a sério.</div>
                <div class="social-footer">
                    {{-- <a href="#"><img src="{{ asset('img/email-branco.svg') }}" alt="email icon"></a> --}}
                    <a href="#"><img src="{{ asset('img/insta-branco.svg') }}" alt="instagram icon"></a>
                    <a href="https://www.facebook.com/profile.php?id=100054419142752a"><img src="{{ asset('img/facebook-branco.svg') }}" alt="facebook icon"></a>
                </div>
            </div>

            <div class="meio">
                <h5>Links Úteis</h5>
                <div class="divisorblocof">
                    <div class="linhaf"></div>
                </div>
                <ul class="list-footer">
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'areaClinica') active @endif"
                            href="{{ route('areaClinica') }}">Área Clínica</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'guiaSaude') active @endif"
                            href="{{ route('guiaSaude') }}">Guia Saúde</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'galeria') active @endif"
                            href="{{ route('galeria') }}">Galeria</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'equipa') active @endif"
                            href="{{ route('sobre') }}">Sobre</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'contactos') active @endif"
                            href="{{ route('contactos') }}">Contactos</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'termosCondicoes') active @endif"
                            href="{{ route('termosCondicoes') }}">Termos e Condições</a></li>
                    <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'politicaprivacidade') active @endif"
                            href="{{ route('politicaprivacidade') }}">Política de Privacidade</a></li>
                </ul>
            </div>

            <div class="direita">
                <h5>Contactos</h5>
                <div class="divisorblocof">
                    <div class="linhaf"></div>
                </div>
                <div class="dirinfo">
                    <div class="infocontent">
                        <i class="fas fa-phone" style="color: #ffffff;"></i>
                        <p><a href="tel:236922431" class="hiperligacao">236 922 431</a></p>
                    </div>
                    <div class="infocontent">
                        <i class="fas fa-envelope" style="color: #ffffff;"></i>
                        <p><a href="mailto:bruno_pedro.lda@hotmail.com" class="hiperligacao">bruno_pedro.lda@hotmail.com</a></p>
                    </div>
                    <div class="infocontent">
                        <i class="fas fa-map" style="color: #ffffff;"></i>
                        <p><a href="https://maps.app.goo.gl/FUMPdDQXhUKs8VS48" class="hiperligacao">Rua Fonte da Vila, n 922 3100-012 Abiul</a></p>
                    </div>
                </div>
            </div>
        </div>

</footer>

<div class="lower-footer">
            <p>Copyright © 2024 Clínica Dentária Bruno & Pedro, lda. Todos os direitos reservados.</p>
        </div>
