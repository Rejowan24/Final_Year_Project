<div>
   {{-- start contact area --}}

   <section id="contact" class="contact mt">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="h-mt">Contact Us</h2>
        </div>

        <div class="container">
            <div class="row pb-4">
               <div class="col-md-8 offset-md-2 py-2">
                  <div class="card">
                     <div class="card-header py-4">
                       <button id="first" class="btn">operation head</button>
                       <button id="second" class="btn">in-charge officer</button>
                       <button id="third" class="btn">student ticketing officer</button>
                       <button id="forth" class="btn">Transport supervisor</button>
                     </div>
                     <div class="card-body">
                        <img id="image" src="{{asset('frontend/img/contact/Diljeb_Kabir_n.jpg')}}" alt="" style="width:6rem" class="mb-4">
                       <h5 class="card-title">
                          <h5 id="headtext">Mr. Kazi Md. Diljeb Kabir</h5>
                          <h5 id="subheadtext">Senior Assistant Registrar/Director,  Daffodil International University</h5>
                       </h5>
                       <p class="card-text">
                          <p id="contactnum">Contact Number: +8801713493104</p>
                          <p id="emailadd">Email:  diljeb@daffodilvarsity.edu.bd</p>
                       </p>
                     </div>
                   </div>
               </div>
            </div>

        <div class="row">
         <div class="section-title mt-5 mb-1">
            <h2>Message For Any Query</h2>
          </div>
          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Daffodil International University, Ashulia server,Dhaka. </p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>diljeb@daffodilvarsity.edu.bd</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>01811-458850</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="firstname" class="form-control" id="name" placeholder="Enter your first name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="text" name="lastname" class="form-control" id="name" placeholder="Enter your last name" required>
                </div>
              </div>
              <div class="row">
               <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
               <div class="col-lg-6 form-group">
                 <input type="number" class="form-control" name="phone" id="email" placeholder="Enter your phone number" required>
               </div>
             </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
   {{-- End contact area --}}
</div>



