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
              <h2 class="heading-secondary">Ecrivez nous pour passez votre commande</h2>
              <p class="cta-text">
                Vous vous trouver au bonne endroit pour passer vos commande
              </p>



              <form class="cta-form" method="post" action="{{route('ecommerce.commande_store')}}" netlify>
                @csrf
                <div>
                  <label for="nom_complet">Nom Complet</label>
                  <input
                    id="nom_complet"
                    type="text"
                    placeholder="John Smith"
                    name="nom_complet"

                  />
                </div><br>

                <div>
                  <label for="email">Adresse Email</label>
                  <input
                    id="email"
                    type="email"
                    placeholder="me@example.com"
                    name="email"

                  />
                </div><br>

                <div>
                  <label for="ville">Ville</label>
                  <input
                    id="ville"
                    type="text"
                    placeholder="Abidjan"
                    name="ville"

                  />
                </div><br>


                 <div>
                  <label for="commune">Commune</label>
                  <input
                    id="commune"
                    type="text"
                    placeholder="Yopougon"
                    name="commune"

                  />
                </div><br>

                 <div>
                  <label for="tel1">Tel 1</label>
                  <input
                    id="tel1"
                    type="text"
                    placeholder="+225 00 00 00 00 00"
                    name="tel1"
                                  />
                </div><br>
                 <div>
                  <label for="tel2">Tel 2</label>
                  <input
                    id="tel2"
                    type="text"
                    placeholder="+225 00 00 00 00 00"
                    name="tel2"
                                  />
                </div><br>
                 <div>
                  <label for="description">Annoncer votre commande</label>
                    <textarea name="description" id="description" cols="100" rows="10" placeholder="Je veux deux pizza..."></textarea>
                </div><br>


                <button type="submit" class="btn btn--form">Commander maintenant !</button>

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
