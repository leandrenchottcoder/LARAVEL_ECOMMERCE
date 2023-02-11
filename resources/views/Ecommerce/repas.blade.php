@extends('Ecommerce.layout.app')

@section('title')
Repas
@endsection


@section('content')


 <main>

      <section class="section-meals" id="meals">
        <div class="container center-text">
          <span class="subheading">Repas</span>
          <h2 class="heading-secondary">
            Nos repas disponible
          </h2>
        </div>

        <div class="container grid grid--3-cols margin-bottom-md">

            @forelse ($repas as $repa )
                <div class="meal">
            <img
              src="{{ asset('uploads/repas/'.$repa->profile_image) }}"
              class="meal-img"
              alt="Japanese Gyozas"
            />
            <div class="meal-content">
              <div class="meal-tags">
                <span class="tag tag--vegetarian">{{$repa->categorie}}</span>
              </div>
              <p class="meal-title">{{$repa->name}}</p>
              <ul class="meal-attributes">
                <li class="meal-attribute">
                  <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                  <span><strong>650</strong> calories</span>
                </li>
                <li class="meal-attribute">
                  <ion-icon
                    class="meal-icon"
                    name="restaurant-outline"
                  ></ion-icon>
                  <span><strong>{{$repa->prix}}</strong> fr</span>
                </li>
                <li class="meal-attribute">
                  <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                  <span><strong>{{$repa->rating}}</strong></span>
                </li>
              </ul>
            </div>
          </div>

            @empty
            <span class="text-center text-danger">Au repas n'a ete trouver dans notre base de donnée</span>

            @endforelse


        </div>

        <div class="container all-recipes">
          <a href="#" class="link">Voir tous les produits &rarr;</a>
        </div>
      </section>


      <section class="section-cta" id="cta">
        <div class="container">
          <div class="cta">
            <div class="cta-text-box">
              <h2 class="heading-secondary">Ecrivez nous pour passez votre commande</h2>
              <p class="cta-text">
                Vous vous trouver au bonne endroit pour passer vos commande
              </p>

              <form class="cta-form" name="sign-up" netlify>
                <div>
                  <label for="full-name">Nom Complet</label>
                  <input
                    id="full-name"
                    type="text"
                    placeholder="John Smith"
                    name="full-name"
                    required
                  />
                </div>

                <div>
                  <label for="email">Adresse Email</label>
                  <input
                    id="email"
                    type="email"
                    placeholder="me@example.com"
                    name="email"
                    required
                  />
                </div>

                <div>
                  <label for="select-where">Where did you hear from us?</label>
                  <select id="select-where" name="select-where" required>
                    <option value="">Please choose one option:</option>
                    <option value="friends">Friends and family</option>
                    <option value="youtube">YouTube video</option>
                    <option value="podcast">Podcast</option>
                    <option value="ad">Facebook ad</option>
                    <option value="others">Others</option>
                  </select>
                </div>

                <button class="btn btn--form">Contactez nous maintenant !</button>

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
    </main>


@endsection
