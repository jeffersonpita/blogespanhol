@extends('site.layouts.basico')

@section('conteudo')

  <div class="container">
    <div class="row">
      <div class="col col-md-6 offset-md-3" style="padding-left: 1rem; padding-right: 1rem;">
        <h2>Contato</h2>

        <form id="contact-form" name="contact-form" action="{{ route('site.contato')}}" method="POST" style="padding-top:10px;">
          @csrf

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Nome</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="nome">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">E-mail</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="e-mail">

                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                              <label for="subject" class="">Assunto</label>
                              <input type="text" id="subject" name="subject" class="form-control"  placeholder="assunto">

                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Mensagem</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"  placeholder="mensagem"></textarea>

                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="" style="width:100%; padding: 1rem 0;">
                  <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();" style="float:right">Enviar</a>
              </div>

            </form>
            <br><br>
      </div>
    </div>
  </div>

@endsection
