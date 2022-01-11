
<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <h2><a class="text-white" href="{{ route('index') }}">Ateliê</a></h2>
                    </div>
                    <p>O cliente está no centro de nosso modelo de negócios único, que inclui design.</p>
                    <a href="#"><img src="img/payment.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Compras</h6>
                    <ul>
                        <li><a href="#">Coleções</a></li>
                        <li><a href="#">Como são feitos</a></li>
                        <li><a href="#">Quem somos?</a></li>
                        <li><a href="#">Oferta</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Saiba</h6>
                    <ul>
                        <li><a href="#">Entre em contato</a></li>
                        <li><a href="#">Formas de pagamento</a></li>
                        <li><a href="#">Entrega</a></li>
                        <li><a href="#">Devolução e trocas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6>Seja vip</h6>
                    <div class="footer__newslatter">
                        <p>Seja o primeiro a saber sobre novidades, veja livros, promoções e promoções!</p>
                        <form action="#">
                            <input type="text" placeholder="Seu email">
                            <button type="submit"><span class="icon_mail_alt"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p>Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script> | 2022
                        Todos os direitos reservados | Este modelo é feito com
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                        por <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('/js/mixitup.min.js') }}"></script>
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>

@stack('scripts')

</body>

</html>
