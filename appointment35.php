<html>
<body>
<header>
        <div class="logo">
            <img src="logo-removebg-preview.png" alt="error">
        </div> 
        
        <nav class="navbar">
            <ul>
                <!-- <li><a href="home.php">Home</a></li> -->
                <li><a href="service.php">Services</a></li>
                <!-- <li><a href="about.php">About</a></li> -->
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="logout.php">Logout</a></li>
                <!-- <li><a href="signup.php">Sign up</a></li> -->
            </ul>
        </nav><br><br><br>
        
    </header>
<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form action="connect.php" method="POST">
      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label"> Full Name </label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Full Name"
          class="formbold-form-input"
        />
      </div>
      <div class="formbold-mb-5">
        <label for="phone" class="formbold-form-label"> Phone Number </label>
        <input
          type="text"
          name="phone"
              id="phone"
          placeholder="Enter your phone number"
          class="formbold-form-input"
        />
      </div>
      <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label"> Email Address </label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
          class="formbold-form-input"
        />
      </div>
      <div class="formbold-mb-5">
        <label for="service" class="formbold-form-label"> Service </label>
        <input
          type="text"
          name="service"
          id="service"
          value="cealling cleaning"
          class="formbold-form-input"
          readonly
          />
      <div class="formbold-mb-5">
        <label for="price" class="formbold-form-label">Price </label>
        <input
          type="number"
          name="price"
          id="price"
          value="250.00"
          class="formbold-form-input"
          readonly
          />
      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label"> Date </label>
            <input
              type="datetime-local"
              name="date"
              id="date"
              class="formbold-form-input"
            />
          </div>
        </div>
       
      </div>

      <div class="formbold-mb-5 formbold-pt-3">
        <label class="formbold-form-label formbold-form-label-2">
          Address Details
        </label>
        <div class="formbold-mb-5">
        <label for="address" class="formbold-form-label"> </label>
        <input
          type="text"
          name="address"
          id="address"
          placeholder="Enter Your Address..!"
          class="formbold-form-input"/>

        </div>
      </div>

      <div>
        <button class="formbold-btn">Book Appointment</button>
      </div>
  </div>
</div>
</form>
</body>
</html>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", Arial, Helvetica, sans-serif;
  }
  .formbold-mb-5 {
    margin-bottom: 20px;
  }
  .formbold-pt-3 {
    padding-top: 12px;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 550px;
    width: 100%;
    background: white;
  }
  .formbold-form-label {
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    margin-bottom: 12px;
  }
  .formbold-form-label-2 {
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 20px;
  }

  .formbold-form-input {
    width: 100%;
    padding: 12px 24px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    background: white;
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 32px;
    border: none;
    font-weight: 600;
    background-color: #6a64f1;
    color: white;
    width: 100%;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold--mx-3 {
    margin-left: -12px;
    margin-right: -12px;
  }
  .formbold-px-3 {
    padding-left: 12px;
    padding-right: 12px;
  }
  .flex {
    display: flex;
  }
  .flex-wrap {
    flex-wrap: wrap;
  }
  .w-full {
    width: 100%;
  }
  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }

  *{
    margin: 0;
    padding: 0;
}

.navbar ul{
    display: flex;
    padding: 20px;
    float: right;
    margin-right: 35px;
    margin-top: 5px;
    transition: .3s ease-in-out;
}
.navbar li{
    list-style: none ;
    margin: 13px 20px; 
}
.navbar li a{
    margin-top: -30px;
    padding: 3px 3px;
    text-decoration: none;
    color: rgb(0, 0, 0);
    font-size: 18px;
    font-weight: bold;
    font-family: 'Times New Roman';
}

.navbar a:hover{
    color:black;
}
.navbar ul li::after{ 
    content: '';
    height: 2px;
    width: 0;
    background:black;
    transition: 0.5s;
    display: block;
    margin: auto;
} 

.navbar ul li:hover::after{
    width: 100%;
}

.logo{
    float: left;
    padding-top: 10px;
    cursor: pointer;
    margin-top: 10px;
}

.logo img{
    width: 250px;
    height: 150px ;
    margin-top:-45px;
}
</style>