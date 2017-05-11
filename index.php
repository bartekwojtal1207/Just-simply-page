<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="sample, page">
    <title>Sample page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="cssRwd/styleRwd.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous">
    </script>
    <script src="js/jquery.color.js">
    </script>
    <script type="text/javascript" src="js/script.js">
    </script>
  </head>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><img src="img/logo.png" alt="logo"></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <header>
        <h1>This is just a sample page</h1>
        <button type="button" name="button" >push the button</button>
      </header>
      <section class="main_section">
          <div class="paragraph_list">
              <div class="paragraph">
                <h3>A heading title</h3>
                <img src="img/image1.jpg" alt="obraz">
                <p>Lorem <span class="color_red">ipsum</span> dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                <br>
                <p>Lorem <span class="color_red">ipsum</span> dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. <span class="hide_text">Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</span></p>
                <a href="#" class="show_more">-  read more</a>
              </div>
              <div class="paragraph">
                <h3>A much longer heading title</h3>
                <img src="img/image1.jpg" alt="obraz">
                <p>Lorem <span class="color_red">ipsum</span> dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                <br>
                <p class="seccond_text">Lorem <span class="color_red">ipsum</span> dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.<span class="hide_text"> Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</span></p>
                  <a href="#"  class="show_more" style="padding-top: 1em;" > -  read more</a>
              </div>
              <div class="paragraph">
                <h3>A heading title</h3>
                <img src="img/image1.jpg" alt="obraz">
                <p>Lorem <span class="color_red">ipsum</span> dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                <br>
                <p>Lorem <span class="color_red">ipsum</span> dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. <span class="hide_text">Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</span></p>
                <a href="#" class="show_more">-  read more</a>
              </div>
          </div>
      </section>
      <section class="form_section">
        <div class="contact_section">
          <h3>Contact us</h3>
          <form class="main_form"  method="post">
            <input type="text" name="mess" value="your message"  >
            <input type="text" name="id_person" value="name" >
            <input type="email" name="email" value="email" >
            <input type="text" name="phone" value="phone" >
            <input type="submit" name="send_btn" value="send_message">
        </form>
        </div>
        <div class="back_top">
            <a href="#">back to top</a>
        </div>
      </section>
      <footer>
        <div class="link_footer">
          <table>
            <tr>
              <td><a href="#">- home</a></td>
              <td><a href="#">- about us</a></td>
              <tr>
              </tr>
              <td><a href="#">- products</a></td>
              <td><a href="#">- contact</a></td>
            </tr>
          </table>
        </div>
        <div class="comunication">
          <div class="twitt icon">
            <a href="https://twitter.com/"><img src="img/twitt.jpg" alt="twitter_icon"></a>
          </div>
          <div class="face icon">
            <a href="https://www.facebook.com/"><img src="img/face_icon.png" alt="face_icon"></a>
          </div>
        </div>
        <div class="footer_text">
          <p>Copyright &copy 2010 Sample & Pack, Inc. </p>
        </div>
      </footer>
    </div>
  </body>
</html>
