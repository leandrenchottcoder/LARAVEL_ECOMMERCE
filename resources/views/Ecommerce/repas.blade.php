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
          <div class="meal">
            <img
              src="{{asset('ecommerce/img/meals/meal-1.jpg')}}"
              class="meal-img"
              alt="Japanese Gyozas"
            />
            <div class="meal-content">
              <div class="meal-tags">
                <span class="tag tag--vegetarian">Vegetarian</span>
              </div>
              <p class="meal-title">Japanese Gyozas</p>
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
                  <span>NutriScore &reg; <strong>74</strong></span>
                </li>
                <li class="meal-attribute">
                  <ion-icon class="meal-icon" name="star-outline"></ion-icon>
                  <span><strong>4.9</strong> rating (537)</span>
                </li>
              </ul>
            </div>
          </div>

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


          <div class="meal">
            <img
              src="{{asset('ecommerce/img/meals/noodles.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/stew.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/gallery-1.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/gallery-2.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/gallery-3.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/gallery-4.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/gallery-7.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/gallery-8.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/gallery-11.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/gallery-12.jpg')}}"
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
              src="{{asset('ecommerce/img/meals/gallery-9.jpg')}}"
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
