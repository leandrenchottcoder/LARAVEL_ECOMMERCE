@extends('Ecommerce.layout.app')
@section('title')
 Accueil
@endsection

@section('content')
    <main>
      <section class="section-hero">
        <div class="hero">
          <div class="hero-text-box">
            <h1 class="heading-primary">
              Un repas sain vous sera livré à la porte, chaque jour.
            </h1>
            <p class="hero-description">
              The smart 365-days-per-year food subscription that will make you
              eat healthy again. Tailored to your personal tastes and
              nutritional needs.
            </p>
            <a href="{{route('register')}}" class="btn btn--full margin-right-sm"
              >S'inscrire</a
            >
            <a href="{{route('ecommerce.commande')}}" class="btn btn--outline"
              >Commander &darr;</a
            >
            {{-- <div class="delivered-meals">
              <div class="delivered-imgs">
                <img src="{{asset('ecommerce/img/customers/customer-1.jpg')}}" alt="Customer photo" />
                <img src="{{asset('ecommerce/img/customers/customer-2.jpg')}}" alt="Customer photo" />
                <img src="{{asset('ecommerce/img/customers/customer-3.jpg')}}}" alt="Customer photo" />
                <img src="img/customers/customer-4.jpg" alt="Customer photo" />
                <img src="img/customers/customer-5.jpg" alt="Customer photo" />
                <img src="img/customers/customer-6.jpg" alt="Customer photo" />
              </div>
              <p class="delivered-text">
                <span>250,000+</span> meals delivered last year!
              </p>
            </div> --}}
          </div>
          <div class="hero-img-box">
            <picture>
              <source srcset="{{asset('ecommerce/img/meals/img5.png')}}" type="image/webp" />
              <source srcset="{{asset('ecommerce/img/hero-2.png')}}" type="image/webp" />

              <img
                src="img/hero-2.png"
                class="hero-img"
                alt="Woman enjoying food, meals in storage container, and food bowls on a table"
              />
            </picture>
          </div>
        </div>
      </section>

      {{-- <section class="section-featured">
        <div class="container">
          <h2 class="heading-featured-in">As featured in</h2>
          <div class="logos">
            <img src="img/logos/techcrunch.png" alt="Techcrunch logo" />
            <img
              src="img/logos/business-insider.png"
              alt="Business Insider logo"
            />
            <img
              src="img/logos/the-new-york-times.png"
              alt="The New York Times logo"
            />
            <img src="img/logos/forbes.png" alt="Forbes logo" />
            <img src="img/logos/usa-today.png" alt="USA Today logo" />
          </div>
        </div>
      </section> --}}

      {{-- <section class="section-how" id="how-it-work">
        <div class="container">
          <span class="subheading">How it works</span>
          <h2 class="heading-secondary">
            Your daily dose of health in 3 simple steps
          </h2>
        </div>

        <div class="container grid grid--2-cols grid--center-v">
          <!-- STEP 01 -->
          <div class="step-text-box">
            <p class="step-number">01</p>
            <h3 class="heading-tertiary">
              Tell us what you like (and what not)
            </h3>
            <p class="step-description">
              Never again waste time thinking about what to eat! Omnifood AI
              will create a 100% personalized weekly meal plan just for you. It
              makes sure you get all the nutrients and vitamins you need, no
              matter what diet you follow!
            </p>
          </div>
          <div class="step-img-box">
            <img
              src="img/app/app-screen-1.png"
              class="step-img"
              alt="iPhone app
            preferences selection screen"
            />
          </div>

          <!-- STEP 02 -->
          <div class="step-img-box">
            <img
              src="img/app/app-screen-2.png"
              class="step-img"
              alt="iPhone app
            meal approving plan screen"
            />
          </div>
          <div class="step-text-box">
            <p class="step-number">02</p>
            <h3 class="heading-tertiary">Approve your weekly meal plan</h3>
            <p class="step-description">
              Once per week, approve the meal plan generated for you by Omnifood
              AI. You can change ingredients, swap entire meals, or even add
              your own recipes.
            </p>
          </div>

          <!-- STEP 03 -->
          <div class="step-text-box">
            <p class="step-number">03</p>
            <h3 class="heading-tertiary">Receive meals at convenient time</h3>
            <p class="step-description">
              Best chefs in town will cook your selected meal every day, and we
              will deliver it to your door whenever works best for you. You can
              change delivery schedule and address daily!
            </p>
          </div>
          <div class="step-img-box">
            <img
              src="img/app/app-screen-3.png"
              class="step-img"
              alt="iPhone app
            delivery screen"
            />
          </div>
        </div>
      </section> --}}

      <section class="section-meals" id="meals">
        <div class="container center-text">
          <span class="subheading">Repas</span>
          <h2 class="heading-secondary">
            Nos repas favoris
          </h2>
        </div>

        <div class="container grid grid--3-cols margin-bottom-md">

          <div class="meal">
            <img
              src="{{asset('ecommerce/img/meals/meal-2.jpg')}}"
              class="meal-img"
              alt="Avocado Salad"
            />
            <div class="meal-content">
              <div class="meal-tags">
                <span class="tag tag--vegan">Vegan</span>
                <span class="tag tag--paleo">Paleo</span>
              </div>
              <p class="meal-title">Avocado Salad</p>
              <ul class="meal-attributes">
                <li class="meal-attribute">
                  <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                  <span><strong>400</strong> calories</span>
                </li>
                <li class="meal-attribute">
                  <ion-icon
                    class="meal-icon"
                    name="restaurant-outline"
                  ></ion-icon>
                  <span>NutriScore &reg; <strong>92</strong></span>
                </li>
                <li class="meal-attribute">
                  <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                  <span><strong>4.8</strong> rating (441)</span>
                </li>
              </ul>
            </div>
          </div>


          <div class="meal">
            <img
              src="{{asset('ecommerce/img/meals/meal-1.jpg')}}"
              class="meal-img"
              alt="Avocado Salad"
            />
            <div class="meal-content">
              <div class="meal-tags">
                <span class="tag tag--vegan">Vegan</span>
                <span class="tag tag--paleo">Paleo</span>
              </div>
              <p class="meal-title">Avocado Salad</p>
              <ul class="meal-attributes">
                <li class="meal-attribute">
                  <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                  <span><strong>400</strong> calories</span>
                </li>
                <li class="meal-attribute">
                  <ion-icon
                    class="meal-icon"
                    name="restaurant-outline"
                  ></ion-icon>
                  <span>NutriScore &reg; <strong>92</strong></span>
                </li>
                <li class="meal-attribute">
                  <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                  <span><strong>4.8</strong> rating (441)</span>
                </li>
              </ul>
            </div>
          </div>


          <div class="meal">
            <img
              src="{{asset('ecommerce/img/meals/curry.jpg')}}"
              class="meal-img"
              alt="Avocado Salad"
            />
            <div class="meal-content">
              <div class="meal-tags">
                <span class="tag tag--vegan">Vegan</span>
                <span class="tag tag--paleo">Paleo</span>
              </div>
              <p class="meal-title">Avocado Salad</p>
              <ul class="meal-attributes">
                <li class="meal-attribute">
                  <ion-icon class="meal-icon" name="flame-outline"></ion-icon>
                  <span><strong>400</strong> calories</span>
                </li>
                <li class="meal-attribute">
                  <ion-icon
                    class="meal-icon"
                    name="restaurant-outline"
                  ></ion-icon>
                  <span>NutriScore &reg; <strong>92</strong></span>
                </li>
                <li class="meal-attribute">
                  <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                  <span><strong>4.8</strong> rating (441)</span>
                </li>
              </ul>
            </div>
          </div>

          {{-- <div class="diets">
            <h3 class="heading-tertiary">Works with any diet:</h3>
            <ul class="list">
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Vegetarian</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Vegan</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Pescatarian</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Gluten-free</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Lactose-free</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Keto</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Paleo</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Low FODMAP</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Kid-friendly</span>
              </li>
            </ul>
          </div> --}}
        </div>

        <div class="container all-recipes">
          <a href="{{route('ecommerce.repas')}}" class="link">Voir tous les produits &rarr;</a>
        </div>
      </section>


      {{-- <section class="section-cta" id="cta">
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
      </section> --}}
    </main>

@endsection
