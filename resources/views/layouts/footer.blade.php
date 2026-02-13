  @if (!Request::is('/'))
      <footer>
          <section class="c-black footer-section">
              <div class="block-content t-center">
                  <div class="grid col-5 med-col-2 small-col-1">
                      <article class='t-left'>
                          <h3 class='h5 tc-white'>Diseño</h3>
                          <ul>
                              <li><a href='{{ route('service.show', 'diseno-logo') }}' data-navitem=''
                                      class='footer-link rel d-block p-10'>Diseño de Logo</a></li>
                              <li><a href='{{ route('service.show', 'paginas-web') }}' data-navitem=''
                                      class='footer-link rel d-block p-10'>Diseño Web</a></li>
                              <li><a href='{{ route('service.show', 'diseno-marca') }}' data-navitem='design_brand'
                                      class='footer-link rel d-block p-10'>Diseño de Marca</a></li>
                          </ul>
                      </article>
                      <article class='t-left'>
                          <h3 class='h5 tc-white'>Software</h3>
                          <ul>
                              <li><a href='{{ route('service.show', 'software') }}' data-navitem='software-programacion'
                                      class='footer-link rel d-block p-10'>Software</a></li>
                              <li><a href='{{ route('service.show', 'comercio-electronico') }}'
                                      data-navitem='comercio-electronico' class='footer-link rel d-block p-10'>Comercio
                                      Electrónico</a></li>

                              <li><a href='{{ route('service.show', 'aplicaciones-moviles') }}'
                                      data-navitem='programador-aplicaciones'
                                      class='footer-link rel d-block p-10'>Aplicaciones</a></li>
                              <li><a href='{{ route('service.show', 'software-personalizado') }}'
                                      data-navitem='software-personalizado'
                                      class='footer-link rel d-block p-10'>Software a la Medida</a></li>
                          </ul>
                      </article>
                      <article class='t-left'>
                          <h3 class='h5 tc-white'>Servicios</h3>
                          <ul>
                              <li><a href='{{ route('service.show', 'multimedia') }}' data-navitem='multimedia'
                                      class='footer-link rel d-block p-10'>Multimedia</a></li>
                              <li><a href='{{ route('service.show', 'consultoria') }}' data-navitem='consultoria'
                                      class='footer-link rel d-block p-10'>Consultoría</a></li>
                              <li><a href='{{ route('service.show', 'publicidad') }}' data-navitem='publicidad'
                                      class='footer-link rel d-block p-10'>Publicidad</a></li>
                          </ul>
                      </article>
                      <article class='t-left'>
                          <h3 class='h5 tc-white'>Xencar Marketing Digital</h3>
                          <ul>
                              <li>
                                  <a href='{{ route('contact') }}' data-navitem='contacto'
                                      class='footer-link rel d-block p-10'>¡Comenzar ahora!</a>
                              </li>
                              <li>
                                  <a href='tel:3221311256' data-navitem='contacto'
                                      class='footer-link rel d-block p-10'>Llamar: 322 131 1256</a>
                              </li>
                          </ul>
                      </article>
                  </div>

                  <p class="footer-text">Xencar, Marketing Digital y Contenido Multimedia © 2025 Todos los derechos
                      reservados

                  </p>
                  <a href='/admin/' style="color:transparent;">Login Xencar</a>
              </div>
          </section>
      </footer>
  @endif
  <script src="https://code.jquery.com/jquery-2.0.3.min.js"></script>

  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="{{ url('assets/js/lozad.min.js') }}"></script>
  <script src="{{ url('assets/js/script.js') }}"></script>
