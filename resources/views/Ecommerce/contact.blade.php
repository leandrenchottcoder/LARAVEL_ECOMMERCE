@extends('Ecommerce.layout.app')

@section('title')
 Contact
@endsection

@section('content')

<section class="section-cta" id="cta">
   <div class="container">
     {{-- Message de success --}}
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

        {{-- Message d errors --}}
     @if($errors->any())

                    <div class="alert alert-danger">
                            <strong>whoops!</strong> There were problems with input. <br><br>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                    </div>

        @endif
   </div>
        <div class="container">
          <div class="cta">
            <div class="cta-text-box">
              <h2 class="heading-secondary">Ecrivez nous pour plus d'information</h2>
              <p class="cta-text">
                Renseignez vous et vous serrez satisfait dus service
              </p>



              <form class="cta-form" method="post" action="{{route('ecommerce.store')}}" netlify>
                @csrf
                <div>
                  <label for="nom_complet">Nom Complet</label>
                  <input
                    id="nom_complet"
                    type="text"
                    placeholder="John Smith"
                    name="nom_complet"

                  />
                </div>

                <div>
                  <label for="email">Adresse Email</label>
                  <input
                    id="email"
                    type="email"
                    placeholder="me@example.com"
                    name="email"

                  />
                </div>

                <div>
                  <label for="ville">Ville</label>
                  <input
                    id="ville"
                    type="text"
                    placeholder="Abidjan"
                    name="ville"

                  />
                </div>


                 <div>
                  <label for="sujet">sujet</label>
                  <input
                    id="sujet"
                    type="text"
                    placeholder="Omnifood ......."
                    name="sujet"

                  />
                </div>

                 <div>
                  <label for="tel">Tel</label>
                  <input
                    id="tel"
                    type="text"
                    placeholder="+225 00 00 00 00 00"
                    name="tel"
                                  />
                </div>


                <button type="submit" class="btn btn--form">Contactez nous maintenant !</button>

                <!-- <input type="checkbox" />
                <input type="number" /> -->
              </form>
            </div>
            <div
              class="cta-img-box"
              role="img"
              aria-label="Woman enjoying food"
            ></div>
          </div>
        </div>
      </section>

      @endsection
