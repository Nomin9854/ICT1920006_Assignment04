<!DOCTYPE html>
<html>
<head>
  <title>Four Sections Web Page</title>
  <style>
    @font-face {
			  font-family: 'Font_1';
			  src: URL('fonts/font_1.ttf') format('truetype');
			}
   
    section {
      padding: 50px;
      background-color: #f2f2f2;
      margin-bottom: 20px;
      width: 100%; 
      height: 800px;
      margin-left: auto;
      margin-right: auto;
      background-size: cover;
      background-position: center;
     
    }
    
    
    
    #section1 {
      background-image: url("https://imgur.com/23l87rd.jpeg");
      transition: background-image 1s ease-in-out;
     
    }

    #section2 {
      background-image: url("https://imgur.com/61eepxc.jpeg");
      transition: background-image 1s ease-in-out;
     
      
    }

    #section3 {
      background-image: url("https://imgur.com/eJ6K0XJ.jpeg");
      transition: background-image 1s ease-in-out;
      
    }

    #section4 {
      background-image: url("https://imgur.com/OoSLnvv.jpeg");
      transition: background-image 1s ease-in-out;
    }
    #section5 {
      background-image: url("https://imgur.com/stN8OSB.jpeg");
      transition: background-image 1s ease-in-out;
     
    }
    .navbar {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 10px;
      border-radius: 5px;
      z-index: 999;
    }

    .navbar a {
      display: inline-block;
      margin-right: 10px;
      color: #333;
      text-decoration: none;
      font-weight: bold;
      font-family: 'Font_1', sans-serif;
    }

    .navbar a:hover {
      color: #ff0000;
    }

    h1 {
  font-size: 50px;
  font-family: 'Font_1', sans-serif;
  margin-top: 0; 
}

#content5 {
  position: relative;
  top: -20px; 
}


    p {
      font-size: 22px; 
      opacity: 100;
      font-family: 'Font_1', sans-serif;
      background-color: white;
      opacity: 0.8;

    
    }
    ul {
      font-size: 22px; 
      font-family: 'Font_1', sans-serif;
      color:black;
      opacity: 0.8;
      background-color: white;
      
      
    }
    li{
        padding:10px;
    }
    .logo {
      position:absolute;
      top: 15px;
      left: 20px;
      width: 50px;
      z-index: 999;
    }
      
  
    .footer {
    background-color: white;   
    color: black;
    padding: 10px;
    text-align: center;
    bottom: 100%;
    left: 100%;
    width: 100%;
    height:29%;
 }
    .footer a {
      text-decoration: none;
      margin: 10% 10px;
     

    }
    .social-icons {
      display: flex;
      justify-content: center;
      margin-top: 20px 20px;
    }

    .social-icons img {
      width: 20px; 
      margin: 0 100px;
    }
    
    .form-group {
  margin-bottom: 1.5rem;
   }

label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: bold;
  font-family: 'Font_1', sans-serif;
  
   }

input[type="email"],
textarea {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size:12px;
  font-family: 'Font_1', sans-serif;
  
  }

button {
  padding: 0.5rem 1rem;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-family: 'Font_1', sans-serif;
  
  }

button:hover {
  background-color: #45a049;
  }


  </style>
</head>
<body>
  <div class="navbar">
    <a href="#section1">Cricket</a>
    <a href="#section2">Test</a>
    <a href="#section3">ODI</a>
    <a href="#section4">T20</a>
    <a href="#section5">More</a>
  </div>
  
  <script>
    function smoothScroll(target) {
      const element = document.querySelector(target);
      window.scrollTo({
        top: element.offsetTop,
        behavior: 'smooth'
      });
    }

    const navbarLinks = document.querySelectorAll('.navbar a');

    navbarLinks.forEach(link => {
      link.addEventListener('click', (event) => {
        event.preventDefault(); 
        const targetSection = link.getAttribute('href'); 
        smoothScroll(targetSection); 
      });
    });
    </script>

  <section id="section1">
    
   <img class="logo" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/cricket-logo-design-template-b800f3f07a33c4de70d40a59daafe179_screen.jpg?ts=1654766479" alt="Cricket Logo">
    <h1>Cricket</h1>
    <button id="toggleButton">View Content</button>

<p id="content" style="display: none;">Cricket is a sport that requires the use of a bat and ball. It is easily one of the most prevalent sports in the world. This game consists of two teams that include 11 players each. The main aim of the game is to score the highest number of runs. It is played on a pitch in a field that is well-maintained for the same purpose. Cricket is particularly famous in England and India. There is a lot of potential in Cricket which allows players to earn well. Cricket does not have one single format but various ones. Similarly, each format has a different set of rules and duration.</p>

<script>
  const toggleButton = document.getElementById('toggleButton');
  const content = document.getElementById('content');

  toggleButton.addEventListener('click', function () {
    if (content.style.display === 'none') {
      content.style.display = 'block';
    } else {
      content.style.display = 'none';
    }
  });
</script>

    <h1>History</h1>
    <button id="toggleButton2">View Content</button>

    <p id="content2" style="display: none;">The history of cricket dates back to the sixteenth century and is one of the most popular sports in today's era. Cricket has been played since the year 1844. In 1877, the world was introduced to international cricket, and since then it has only grown. Earlier, cricket was played between counties with teams owned by individuals. After it became more popular, it spread to North America from the English colonies. Even in India, cricket was established by the East India Company. Since then, cricket saw a lot of new rules and regulations being implemented to make it a gentleman's game. The first test match was between an England team and Australia in the year 1877. When it became too popular, the Imperial Cricket Conference was established. The first members were England, South Africa, and Australia. Later, India and other countries joined. Earlier, the bats used in the matches were similar to hockey sticks, but with better technology and regulations, they received their standard shape and dimensions. Tests, one day, and twenty twenty are the three formats of cricket.</p>
    
    <script>
      const toggleButton2 = document.getElementById("toggleButton2");
      const content2 = document.getElementById("content2");
    
      toggleButton2.addEventListener("click", function() {
        if (content2.style.display === "none") {
          content2.style.display = "block";
        } else {
          content2.style.display = "none";
        }
      });
    </script>

  
  </section>

  
  <script>
    const images = [
      "https://imgur.com/23l87rd.jpeg",
      "https://imgur.com/61eepxc.jpeg",
      "https://imgur.com/OoSLnvv.jpeg"
    ];

    let currentIndex = 0;
    const section1 = document.querySelector("#section1");

    setInterval(() => {
      currentIndex = (currentIndex + 1) % images.length;
      section1.style.backgroundImage = `url('${images[currentIndex]}')`;
    }, 10000); 
  </script>
</body>
</html>

  <section id="section2">
  <img class="logo" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/cricket-logo-design-template-b800f3f07a33c4de70d40a59daafe179_screen.jpg?ts=1654766479" alt="Cricket Logo">
    <h1>Test Cricket</h1>
    <button id="toggleButton3">View Content</button>

    <div id="content3" style="display: none;">
        <p>
            Test cricket is the longest format of cricket and is considered the pinnacle of the sport. It is played over five days and is regarded as the ultimate test of a player's skills, endurance, and mental strength. Here's an explanation of some key aspects of Test cricket:
        </p>
        <ul>
            <li>Duration: Test matches are played over a maximum of five days, with six hours of play scheduled each day. If the full time is not utilized or if the match ends early, it can result in a draw or a result.</li>
            <li>Teams: Two international teams, each representing a different country, participate in a Test match. The teams take turns batting and bowling, with the batting team trying to score runs and the bowling team attempting to take wickets.</li>
            <li>Innings: Each team has two innings, where they get a chance to bat and set a target for the opposition. An innings ends when ten of the team's players are dismissed, or they declare their innings (a strategic decision to end the batting phase) before that happens.</li>
            <li>Overs: In Test cricket, there is no fixed limit on the number of overs (a set of six deliveries by a bowler) a team can bowl or bat. The number of overs is determined by factors such as time available and the pace of play.</li>
            <li>Result: A Test match can have four possible results: a win, a loss, a draw, or a tie. A win occurs when one team outperforms the other in terms of runs scored and wickets taken. A draw happens when the full five days are completed, but neither team achieves a conclusive result. A tie occurs when both teams have an equal number of runs at the end of the match.</li>
        </ul>
        <p>
            Test cricket is known for its ebb and flow, allowing for thrilling comebacks, tense draws, and epic battles between bat and ball. It is seen as the ultimate examination of a cricketer's skill, temperament, and resilience, showcasing the true essence of the sport.
        </p>
    </div>
    <script>
      const toggleButton3 = document.getElementById('toggleButton3');
    const content3 = document.getElementById('content3');
    
    toggleButton3.addEventListener('click', function() {
      if (content3.style.display === 'none') {
        content3.style.display = 'block';
      } else {
        content3.style.display = 'none';
      }
    });
    </script>      
</section>

<script>
function animateSection2() {
  const section2 = document.querySelector('#section2');
  const images = [
    'https://imgur.com/61eepxc.jpeg',
    "https://imgur.com/23l87rd.jpeg",
    "https://imgur.com/OoSLnvv.jpeg"
  ];
  let currentImageIndex = 0;

  section2.style.backgroundImage = `url(${images[currentImageIndex]})`;

  setInterval(() => {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    section2.style.backgroundImage = `url(${images[currentImageIndex]})`;
  }, 10000);
}

animateSection2();
</script>


  <section id="section3">
  <img class="logo" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/cricket-logo-design-template-b800f3f07a33c4de70d40a59daafe179_screen.jpg?ts=1654766479" alt="Cricket Logo">
    <h1>ODI Cricket</h1>
    <button id="toggleButton4">View Content</button>

<div id="content4" style="display: none;">
    <p>
        One day cricket, also known as limited-overs cricket, is a format of the sport that is completed within a single day. It was introduced in the 1970s as a way to attract more spectators and generate increased interest in the game. One day cricket offers a shorter and more dynamic version of the traditional multi-day Test matches.
    </p>
    <ul>
        <li>Limited Overs: In one day cricket, each team is allowed to bat and bowl for a specified number of overs. The most common format is 50 overs per side, although there are also variations like 40 overs or 45 overs per side in certain tournaments.</li>
        <li>Day-Night Matches: Many one day cricket matches are played as day-night encounters. This means that they start in the afternoon and continue into the evening under floodlights. Day-night matches enable larger audiences to attend as they don't have to take time off work or other commitments.</li>
        <li>Result-Oriented: One day cricket emphasizes producing a result within the allocated time. Unlike Test matches that can last up to five days and may end in a draw, one day cricket ensures that a winner is determined by the end of the match. In case the game ends in a tie, a Super Over or other tie-breaker methods may be used to decide the winner.</li>
        <li>Batting and Bowling Strategies: Due to the limited number of overs, teams focus on aggressive batting and bowling strategies to maximize scoring opportunities. Batsmen aim to score runs quickly, and bowlers try to take wickets while restricting the opposition's run rate.</li>
        <li>Fielding Restrictions: To encourage more aggressive play, one day cricket incorporates fielding restrictions. In the initial overs, only a limited number of fielders are allowed outside the inner circle, which is usually a 30-yard radius from the batsman.</li>
    </ul>
    <p>
        One day cricket has gained significant popularity worldwide and has led to the development of prestigious tournaments like the ICC Cricket World Cup and various domestic limited-overs leagues. It offers an exciting blend of skill, strategy, and entertainment, showcasing the dynamism of the sport in a shorter timeframe.
    </p>
</div>
 <script>const toggleButton4 = document.getElementById('toggleButton4');
  const content4 = document.getElementById('content4');
  
  toggleButton4.addEventListener('click', function() {
    if (content4.style.display === 'none') {
      content4.style.display = 'block';
    } else {
      content4.style.display = 'none';
    }
  });
  </script>
  </section>
  <script>
    function animateSection3() {
      const images = [
    "https://imgur.com/eJ6K0XJ.jpeg",
    "https://imgur.com/23l87rd.jpeg",
    "https://imgur.com/OoSLnvv.jpeg"
];

const section3 = document.querySelector('#section3');

let currentImageIndex = 0;
section3.style.backgroundImage = `url(${images[currentImageIndex]})`;

function changeBackgroundImage() {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  section3.style.backgroundImage = `url(${images[currentImageIndex]})`;
}

const interval = setInterval(changeBackgroundImage, 10000); 

    }
    
    animateSection3();
    </script>
    

  <section id="section4">
  <img class="logo" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/cricket-logo-design-template-b800f3f07a33c4de70d40a59daafe179_screen.jpg?ts=1654766479" alt="Cricket Logo">
    <h1>T20 Cricket</h1>
    <button id="toggleButton5">View Content</button><br></br>

<div id="content5" style="display: none;">
    <p>
        T20 cricket, also known as Twenty20 or simply T20, is a shorter format of cricket that has gained immense popularity around the world. It was first introduced by the England and Wales Cricket Board (ECB) in 2003 and has since become a global phenomenon. T20 cricket is played over a period of approximately three hours, making it more fast-paced and exciting compared to traditional formats like Test matches or One Day Internationals (ODIs).
    </p>
    <ul>
        <li>Duration: A T20 match consists of two innings, with each team playing for a maximum of 20 overs per innings. An over is a set of six deliveries (pitches) bowled by a single bowler.</li>
        <li>Objective: The primary objective for both teams in a T20 match is to score as many runs as possible within the allotted 20 overs while simultaneously restricting the opposition from scoring too many runs.</li>
        <li>Limited Overs: The limited number of overs in T20 cricket means that batsmen have to adopt an aggressive approach, aiming to score runs quickly. This often leads to more boundaries (fours and sixes) being hit, resulting in an action-packed and high-scoring game.</li>
        <li>Player Specializations: T20 cricket has popularized specialist roles such as power-hitters (big hitters who aim for maximum runs), pinch-hitters (aggressive openers), death bowlers (skilled in bowling accurate yorkers at the end of an innings), and spinners who excel in the middle overs.</li>
        <li>Result Determination: T20 matches can have three possible outcomes: win, loss, or a tie. In case of a tie, a Super Over—a one-over eliminator—can be played to determine the winner.</li>
    </ul>
    <p>
        T20 cricket's fast-paced nature, big-hitting, and frequent changes in the match's momentum make it an entertaining and thrilling format for players and fans alike. It has contributed to the popularization of cricket globally and has attracted a broader audience, including those who may not traditionally follow the sport.
    </p>
</div>
<script>const toggleButton5 = document.getElementById('toggleButton5');
  const content5 = document.getElementById('content5');
  
  toggleButton5.addEventListener('click', function() {
    if (content5.style.display === 'none') {
      content5.style.display = 'block';
    } else {
      content5.style.display = 'none';
    }
  });
  </script>
  </section>
  <script>
    function animateSection4() {
      const images = [
    "https://imgur.com/eJ6K0XJ.jpeg",
    "https://imgur.com/23l87rd.jpeg",
    "https://imgur.com/OoSLnvv.jpeg"
];

const section4 = document.querySelector('#section4');

let currentImageIndex = 0;
section3.style.backgroundImage = `url(${images[currentImageIndex]})`;

function changeBackgroundImage() {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  section4.style.backgroundImage = `url(${images[currentImageIndex]})`;
}

const interval = setInterval(changeBackgroundImage, 10000); 

    }
    
    
    animateSection4();
    </script>

  <section id="section5">
    
  <h1>Lets Explore More about Cricket</h1>
  <p>We would love to see your feedbacks</p>
    
  <form action="form.php" method="post">
    <label for="Email">Email:</label>
    <input type="Email" id="Email" name="Email" required>
  
    <label for="Feedback">Feedback:</label>
    <textarea id="Feedback" name="Feedback" rows="4" required></textarea>
  
    <button type="submit">Submit</button>
 </form>
 <script>
  const form = document.querySelector('form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(form);
    fetch('form.php', {
      method: 'POST',
      body: formData
    }).then(response => {
      window.location.href = 'index.php'; 
    }).catch(error => {
      console.error(error);
    });
  });
</script>

  <script>
    const emailInput = document.getElementById('email');
const emailError = document.getElementById('emailError');

emailInput.addEventListener('input', function () {
  const email = emailInput.value.trim();
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (email === '') {
    emailError.textContent = '';
  } else if (!emailPattern.test(email)) {
    emailError.textContent = 'Please enter a valid email address.';
  } else {
    emailError.textContent = '';
  }
});
  </script>
  <script>
    const feedbackForm = document.getElementById('feedbackForm');

feedbackForm.addEventListener('submit', function (event) {
  const emailInput = document.getElementById('email');
  const feedbackInput = document.getElementById('feedback');
  const emailError = document.getElementById('emailError');

  if (emailInput.value.trim() === '' || feedbackInput.value.trim() === '') {
    event.preventDefault(); // Prevent form submission

    // Display error message
    emailError.textContent = 'Please complete all fields.';
  }
});

  </script>
  <br></br>
  <P>If you want to explore more about cricket, Just click on below links and visit our social media sites.</p><br></br>
 
    <footer class="footer">
      <a href="https://www.facebook.com/icc/"><img src="data:image/png;base64,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" alt="Facebook"></a>
      <a href="https://www.instagram.com/icc/"><img src="data:image/jpeg;base64,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" alt="Instagram"></a>
      <a href="https://twitter.com/ICC"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFRi6kZsqWb37Trqra4IBt3fyPqkybItQMgR-ZVPDBN-d3yTz2UiBjQUzVOAD2FkZ9SCY&usqp=CAU"alt="Twitter"></a></a>
    </footer>
 </section> 
 <script>
  function animateSection5() {
      const images = [
    "https://imgur.com/stN8OSB.jpeg",
    "https://imgur.com/23l87rd.jpeg",
    "https://imgur.com/OoSLnvv.jpeg"
];

const section3 = document.querySelector('#section5');

let currentImageIndex = 0;
section5.style.backgroundImage = `url(${images[currentImageIndex]})`;

function changeBackgroundImage() {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  section3.style.backgroundImage = `url(${images[currentImageIndex]})`;
}

const interval = setInterval(changeBackgroundImage, 10000); 

    }
    
    animateSection5();
    </script>
 </script>    
</body>
</html>
