<footer class="footer">
    <div class="container-footer">
        <div class="upper-footer">
            <div class="logo"><img src="{{ asset('img/Logo-PulseHub-Branco.png') }}" alt="logo branco pulse hub"></div>
            <ul class="list-footer">
                <li><a class="nav-hiper scrollto @if (Route::currentRouteName() == 'areaClinica') active @endif"
                    href="{{ route('areaClinica') }}">Area Clinica</a></li>


            </ul>
            <div class="social-footer">
                <a href="#"><img src="{{ asset('img/email-branco.svg') }}" alt="email icon"></a>
                <a href="#"><img src="{{ asset('img/insta-branco.svg') }}" alt="instagram icon"></a>
                <a href="#"><img src="{{ asset('img/facebook-branco.svg') }}" alt="facebook icon"></a>
            </div>
        </div>
        <img class="line" src="{{ asset('img/Line 2.svg') }}" alt="grey line footer">
        <div class="lower-footer">
            <p>Pulse Hub 2023. All rights reserved</p>
        </div>
    </div>
</footer>
