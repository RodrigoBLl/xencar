@extends('layouts.app')

@section('title', 'Contacto - Xencar')
@section('description', 'Contáctanos para iniciar tu proyecto digital.')

@section('content')
    @include('partials.cookies')
    @include('partials.calendly')

    <main id="page-content">

        <section class="top-title tc-white c-black">
            <div class="block-box-bg hero">
                <div class="bg-overlay top-title-grad"></div>
                <img class="block-box-full--img" src="{{ asset('assets/images/random/3.jpg') }}">
                <div class="wrapper ai-center jc-center h-40vh">
                    <div class="w-80 p-20-30 small-w-100 t-center">
                        <h1 class="h1 rel top-title-h">¡Comenzar ahora!</h1>
                        <p class="h4 m-t-20">¡Hola! Gracias por su interés en nuestros servicios.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="c-silver">
            <div class="block-content center">
                <p class="h3 t-center">Complete el siguiente formulario lo más detallado posible para que podamos
                    comunicarnos con usted de manera oportuna.</p>
            </div>
        </section>
        <section>
            <div class="block-content center">
                <div class="form-step-bar d-flex jc-center m-b-30">
                    <div class="step-item d-flex jc-center ai-center rel m-5 br-30 c-grey tc-white step-item-active">1</div>
                    <div class="step-item d-flex jc-center ai-center rel m-5 br-30 c-grey tc-white">2</div>
                    <div class="step-item d-flex jc-center ai-center rel m-5 br-30 c-grey tc-white">3</div>
                    <div class="step-item d-flex jc-center ai-center rel m-5 br-30 c-grey tc-white">4</div>
                    <div class="step-item d-flex jc-center ai-center rel m-5 br-30 c-grey tc-white">5</div>
                </div>
                <div class="alert">
                </div>
                <div class="step-alert"></div>
                <!-- Formulario conectado a Laravel -->
                <form action="{{ route('contact.store') }}" method="post" class="contact" id="login">
                    @csrf
                    <div class="form-steps-content-summary">
                        <div class="form-step-content">
                            <h2 class="h5 tc-black-soft">1.Información personal:</h2>
                            <input type="text" name="name" placeholder="Nombre completo" class="input m-b-10 br-5" />
                            <input type="tel" name="phone" placeholder="Teléfono"
                                class="input m-b-10 br-5 input--tel" />
                            <input type="text" name="email" placeholder="Email" class="input br-5" />

                            <a href="javascript:void(0)"
                                class="form-step-button btn c-purple m-t-30 button-invalid">Siguiente</a>
                        </div>
                        <div class="form-step-content">
                            <h2 class="h5 tc-black-soft">2. ¿Sobre qué subdepartamento tiene preguntas?</h2>
                            <div class="content-tabs d-flex fw-wrap">
                                <div class="teaser-tab w-30 small-w-100">
                                    <ul class="tabs" data-tabgroup="tab-group">
                                        <li><a href="#tab1" class="tab-link active">
                                                <h3 class="h5">1. Creativo</h3>
                                            </a></li>
                                        <li><a href="#tab2" class="tab-link ">
                                                <h3 class="h5">2. Software</h3>
                                            </a></li>
                                        <li><a href="#tab3" class="tab-link ">
                                                <h3 class="h5">3. Consultoría</h3>
                                            </a></li>
                                    </ul>
                                </div>
                                <div id="tab-group" class="tabgroup w-30 med-w-40 small-w-100 c-silver br-5">
                                    <div id="tab1" class="after p-20">
                                        <label class="check d-flex ai-center">Diseño de logo <input type="checkbox"
                                                class="input-check" id="project" name="project[]" value="Logo Design">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="check d-flex ai-center">Diseño web <input type="checkbox"
                                                class="input-check" id="project" name="project[]" value="Web Design">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="check d-flex ai-center">Diseño de marca <input type="checkbox"
                                                class="input-check" id="project" name="project[]" value="Brand Design">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="check d-flex ai-center">Impresión y editorial <input type="checkbox"
                                                class="input-check" id="project" name="project[]" value="Print Design">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="tab2" class="after p-20">
                                        <label class="check d-flex ai-center">Software <input type="checkbox"
                                                class="input-check" id="project" name="project[]" value="Software">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="check d-flex ai-center">Software Personalizado <input type="checkbox"
                                                class="input-check" id="project" name="project[]"
                                                value="Software Personalizado">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="check d-flex ai-center">Desarollo Comercio Electrónico <input
                                                type="checkbox" class="input-check" id="project" name="project[]"
                                                value="Comercio Electrónico">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div id="tab3" class="after p-20">
                                        <label class="check d-flex ai-center">Consultoría Google Ads <input
                                                type="checkbox" class="input-check" id="project" name="project[]"
                                                value="Consultoria Google Ads">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="check d-flex ai-center">Consultoría de Programación <input
                                                type="checkbox" class="input-check" id="project" name="project[]"
                                                value="Consultoria Programación">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="check d-flex ai-center">Consultoría Video <input type="checkbox"
                                                class="input-check" id="project" name="project[]"
                                                value="Consultoria Video">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)"
                                class="form-step-button btn c-purple m-t-30 button-invalid">Siguiente</a>
                        </div>
                        <div class="form-step-content">
                            <h2 class="h5 tc-black-soft">3.¿Qué presupuesto considera tener para un proyecto con nosotros?
                            </h2>
                            <label class="check d-flex ai-center">
                                < $20,000 mxn <input type="radio" class="input-check" id="thirteen" name="price"
                                    value="< $20,000 mxn">
                                    <span class="checkmark"></span>
                            </label>
                            <label class="check d-flex ai-center">$20,000 - $50,000 mxn
                                <input type="radio" class="input-check" id="fourteen" name="price"
                                    value="$20,000 - $50,000 mxn">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check d-flex ai-center">$50,000 - $100,000 mxn
                                <input type="radio" class="input-check" id="fifteen" name="price"
                                    value="$50,000 - $100,000 mxn">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check d-flex ai-center">$100,000 - $200,000 mxn
                                <input type="radio" class="input-check" id="sixteen" name="price"
                                    value="$100,000 - $200,000 mxn">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check d-flex ai-center">$250,000 - $500,000 mxn
                                <input type="radio" class="input-check" id="seventeen" name="price"
                                    value="$250,000 - $500,000 mxn">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check d-flex ai-center">> $1000,000 mxn
                                <input type="radio" class="input-check" id="eighteen" name="price"
                                    value="> $1000,000 mxn">
                                <span class="checkmark"></span>
                            </label>
                            <a href="javascript:void(0)"
                                class="form-step-button btn c-purple m-t-30 button-invalid">Siguiente</a>
                        </div>
                        <div class="form-step-content">
                            <h2 class="h5 tc-black-soft">4.¿Cómo prefiere ser contactado?</h2>
                            <label class="check d-flex ai-center">Email <input type="radio" class="input-check"
                                    id="twenty" name="contact" value="Email">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check d-flex ai-center">Whatsapp <input type="radio" class="input-check"
                                    id="twentyone" name="contact" value="Whatsapp">
                                <span class="checkmark"></span>
                            </label>
                            <label class="check d-flex ai-center">Teléfono <input type="radio" class="input-check"
                                    id="twentytwo" name="contact" value="Phone">
                                <span class="checkmark"></span>
                            </label>
                            <a href="javascript:void(0)"
                                class="form-step-button btn c-purple m-t-30 button-invalid">Siguiente</a>
                        </div>
                        <div class="form-step-content t-center">
                            <h2 class="h5 tc-black-soft t-left">5.¿Cuál es el mejor momento para contactarlo?</h2>
                            <div class="grid col-2 small-col-1">
                                <select name="time" id="time" class="custom-select" placeholder="Hora">
                                    <option value="Morning (before noon)">Mañana (antes del mediodía)</option>
                                    <option value="Afternoon (12-4)">Tarde (12-4)</option>
                                    <option value="Evening (4-8)">Noche (4-8)</option>
                                </select>
                                <select name="timezone" id="timezone" class="custom-select" placeholder="Zona horaria">
                                    <option value="PST">PST</option>
                                    <option value="MST">MST</option>
                                    <option value="CST">CST</option>
                                    <option value="EST">EST</option>
                                </select>
                            </div>
                            <textarea name="comments" id="comments" placeholder="Información de proyecto" class="m-b-30 w-100 textarea br-5"></textarea>
                            <div id="response"></div>
                            <input type="submit" id="submit" value="Enviar" name="submit"
                                class="btn cta submit c-red tc-white" />
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </main>
@endsection
