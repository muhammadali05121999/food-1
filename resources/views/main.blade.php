@include('header')


<body>
    <!-- Menu -->
    <div class="menu">
      <nav>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <ion-icon name="grid-outline"></ion-icon>
        </label>

        <label class="logo">FoodLover</label>

        <ul>
          <li><a href="#hero-section" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#testimonial">Reviews</a></li>
          <li><a href="{{url('contact')}}">Contact Us</a></li>
        </ul>
      </nav>
    </div>
    <!-- End Menu -->

    <!-- Hero Section -->
    <div class="section flex" id="hero-section">
      <div class="text">
        <h1 class="primary">
          It's Not Just Food, <br />
          It's an <span>Experience</span>
        </h1>

        <p class="tertiary">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa,
          provident dolorum. Voluptatum ducimus minima quasi unde, voluptatibus
          soluta eligendi. Enim, architecto autem.
        </p>

        <a href="#menu" class="btn">Explore Menu</a>
      </div>
      <div class="visual">
        <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/home-banner.png" alt="" />
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- How It Works -->
    <div class="section" id="how-it-works">
      <h2 class="secondary">How It Works</h2>

      <div class="container flex">
        <div class="box">
          <h3>Easy Order</h3>
          <ion-icon name="timer-outline"></ion-icon>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            non?
          </p>
        </div>

        <div class="box active">
          <h3>Best Quality</h3>
          <ion-icon name="trophy-outline"></ion-icon>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            non?
          </p>
        </div>

        <div class="box">
          <h3>Fast Delivery</h3>
          <ion-icon name="checkmark-done-circle-outline"></ion-icon>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam,
            non?
          </p>
        </div>
      </div>
    </div>
    <!-- End How It Works -->

    <!-- About -->
    <div class="section" id="about">
      <div class="container flex">
        <div class="visual">
          <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/about.png" alt="" />
        </div>
        <div class="text">
          <div class="secondary">About Our Restaurant</div>
          <h2 class="primary">150+</h2>

          <h3 class="tertiary">Our Delicious Food</h3>

          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia
            itaque saepe id hic rem doloribus quas esse voluptatibus eius sequi,
            possimus maxime dolores tempore facilis fugit porro mollitia, est
            consequuntur.
          </p>

          <a href="#menu" class="btn">Explore Menu</a>
        </div>
      </div>
    </div>
    <!-- End About -->

    <!-- Restaurant Menu -->
    <div class="section" id="menu">
      <div class="container">
        <ul class="category">
          <li class="active">All</li>
          <li>Biryani</li>
          <li>Chicken</li>
          <li>Pizza</li>
          <li>Burger</li>
          <li>Pasta</li>
        </ul>

        <div class="container">
          <div class="restaurant-menu">
            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-1.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Lahore, Pakistan</div>
              <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <input type="text" name="customer_name" placeholder="Your Name" required>
                <input type="email" name="customer_email" placeholder="Your Email" required>
                <!-- Add other fields as needed -->                
                <div class="order flex">
                  <div class="price">$25.00</div>
                  <button type="submit" class="btn btn-menu">Place Order</button>
              </div>
            </form>
            
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-2.jpg" alt="" />

              <div class="title">Fast Food Restaurant</div>

              <div class="location">Karachi, Pakistan</div>

              <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <input type="text" name="customer_name" placeholder="Your Name" required>
                <input type="email" name="customer_email" placeholder="Your Email" required>
                <!-- Add other fields as needed -->                
                <div class="order flex">
                  <div class="price">$25.00</div>
                  <button type="submit" class="btn btn-menu">Place Order</button>
              </div>
            </form>
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-3.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Karachi, Pakistan</div>

              <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <input type="text" name="customer_name" placeholder="Your Name" required>
                <input type="email" name="customer_email" placeholder="Your Email" required>
                <!-- Add other fields as needed -->                
                <div class="order flex">
                  <div class="price">$25.00</div>
                  <button type="submit" class="btn btn-menu">Place Order</button>
              </div>
            </form>
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-4.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Islamabad, Pakistan</div>

              <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <input type="text" name="customer_name" placeholder="Your Name" required>
                <input type="email" name="customer_email" placeholder="Your Email" required>
                <!-- Add other fields as needed -->                
                <div class="order flex">
                  <div class="price">$25.00</div>
                  <button type="submit" class="btn btn-menu">Place Order</button>
              </div>
            </form>
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-5.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Hyderabad, Pakistan</div>

              <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <input type="text" name="customer_name" placeholder="Your Name" required>
                <input type="email" name="customer_email" placeholder="Your Email" required>
                <!-- Add other fields as needed -->                
                <div class="order flex">
                  <div class="price">$25.00</div>
                  <button type="submit" class="btn btn-menu">Place Order</button>
              </div>
            </form>
            </div>

            <div class="menu-item">
              <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/menu-6.jpg" alt="" />

              <div class="title">Food Restaurant | Chineese & Thai</div>

              <div class="location">Peshawar, Pakistan</div>

              <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <input type="text" name="customer_name" placeholder="Your Name" required>
                <input type="email" name="customer_email" placeholder="Your Email" required>
                <!-- Add other fields as needed -->                
                <div class="order flex">
                  <div class="price">$25.00</div>
                  <button type="submit" class="btn btn-menu">Place Order</button>
              </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    <!-- End Restaurant Menu -->

    <!-- Testimonial -->
    <div class="section" id="testimonial">
      <div class="container flex">
        <div class="text">
          <h2 class="secondary">What people say about FoodLover</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore,
            eos voluptatem odio, molestias ullam error dolor rem laboriosam illo
            quae odit aliquam sint a amet, autem natus! Praesentium, ipsam
            mollitia?
          </p>

          <div class="user flex">
            <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/client.jpg" alt="" />

            <div class="name">
              <div class="title">John Smith</div>
              <div class="location">Lahore, Pakistan</div>
            </div>
          </div>
        </div>
        <div class="visual">
          <img src="https://raw.githubusercontent.com/programmercloud/foodlover/main/img/testimonial.png" alt="" />
        </div>
      </div>
    </div>
    <!-- End Testimonial -->

    <!-- FAQ -->
    <div class="section" id="faq">
      <h2 class="secondary">Frequently Asked Questions</h2>

      <div class="faq">
        <details>
          <summary>I got wrong food what shoud I do?</summary>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Asperiores amet sunt at?
            </p>
          </div>
        </details>

        <details>
          <summary>I got wrong food what shoud I do?</summary>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Asperiores amet sunt at?
            </p>
          </div>
        </details>

        <details>
          <summary>I got wrong food what shoud I do?</summary>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Asperiores amet sunt at?
            </p>
          </div>
        </details>

        <details>
          <summary>I got wrong food what shoud I do?</summary>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Asperiores amet sunt at?
            </p>
          </div>
        </details>
      </div>
    </div>
    <!-- End FAQ -->

    <!-- contact -->
    
     <!-- contact App -->

    <!-- Footer -->
    <div class="footer">
      <div class="container flex">
        <div class="footer-about">
          <h2>About</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            aspernatur sit deleniti enim voluptas voluptatum incidunt rerum,
            exercitationem voluptate nemo quo impedit ad perspiciatis tempore
            nulla dolore fugit, fuga eos.
          </p>
        </div>

        <div class="footer-category">
          <h2>Our Menu</h2>

          <ul>
            <li>Biryani</li>
            <li>Chicken</li>
            <li>Pizza</li>
            <li>Burger</li>
            <li>Pasta</li>
          </ul>
        </div>

        <div class="quick-links">
          <h2>Quick Links</h2>

          <ul>
            <li>About Us</li>
            <li>Contact Us</li>
            <li>Menu</li>
            <li>Order</li>
            <li>Services</li>
          </ul>
        </div>

        <div class="get-in-touch">
          <h2>Get in touch</h2>
          <ul>
            <li>Account</li>
            <li>Support Center</li>
            <li>Feedback</li>
            <li>Suggession</li>
          </ul>
        </div>
      </div>

      <div class="copyright">
        <p>Copyright &copy; 2022. All Rights Reserved.</p>
      </div>
    </div>
    
           <!--   BTN   -->
    <a href="https://www.youtube.com/watch?v=G6jkqDqTYo0" class="youtube" target="__blank">
  <p>Watch Tutorial 🔥</p>
</a>
    <!-- End Footer -->

    <!-- Ion Icons Js -->
    <script
      type="module"
      src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"
    ></script>
    <script
      nomodule
      src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"
    ></script>
  </body>
</html>
