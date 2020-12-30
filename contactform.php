<html>
    <title>Contact to us </title>
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body >
        
        <section id="contact" class="contact">
        
      
            <div class="form">
                <h2>Contuct us</h2>
                  <form action="contact.php" method="post" role="form" class="php-email-form">
                       
                        
                       <div class="name">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                       
                      
                        <label for="name">Your Email</label>
                        <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                       
                      
                      <label for="name">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  
                    
                      <label for="name">Message</label>
                      <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                    
                    <div class="text-end" style="margin-top:15px">
                    <button type="submit" value="send" class=" btn btn-primary">Send Message</button></div>
                </div>
                  </form>
                  <div>
          </section>
          
    </body>
</html>