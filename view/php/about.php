<?php $title = "About us"?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "templates/head.php"?>
    <link rel="stylesheet" href="../style/about.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/body.css">
    
  </head>
  <body>
    
    <?php 
      include "templates/nav.php"?>


    <div class="about-body">
      <h1>FAQ</h1>

      <ol class="questions">
        
        <li>Shipping & Delivery</li>
          <ul>
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)"> What shipping options do you offer? &darr; </button>
              <p class="answer">We offer standard, expedited and overnight shipping options. During checkout, 
                you can select the shipping method that best suits your needs</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)"> How long will it take for my order to arrive? &darr; </button>
              <p class="answer">Delivery times vary depending on your location and the shipping method chosen. 
                Standard shipping typically takes 5-7 business days, while expedited shipping takes 2-3 business days. \
                Overnight shipping will arrive the next business day.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)"> Do you offer international shipping? &darr; </button>
              <p class="answer">Yes, we ship to many countries worldwide. 
                Shipping rates and delivery times for international orders vary based on your location. 
                Please check our shipping page for more details.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)"> Can I track my order? &darr; </button>
              <p class="answer">Yes, once your order is shipped, you will receive a tracking number via email, 
                which you can use to track the status of your shipment.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)"> What are the shipping costs? &darr; </button>
              <p class="answer">Yes, once your order is shipped,
                 you will receive a tracking number via email, which you can use to track the status of your shipment.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)"> What should I do if my package is lost or delayed? &darr; </button>
              <p class="answer">If your package is delayed or lost, 
                please contact our customer support team, 
                and we will help you resolve the issue by either locating your package or issuing a replacement.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)"> Can I change my shipping address after placing an order? &darr; </button>
              <p class="answer">If you need to change your shipping address, 
                please contact us immediately. 
                If the order hasn't been processed or shipped, we'll be happy to update your shipping information.</p>
            </li>
          </ul>


          <li>Orders & Payments</li>
            <ul>
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">What payment methods do you accept? &darr;</button>
                <p class="answer">We accept major credit and debit cards, 
                  PayPal, Apple Pay, and Google Pay. We also offer payment plans through select partners.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">Is it safe to use my credit card on your website? &darr;</button>
                <p class="answer">Yes, our website uses SSL encryption to protect your personal and payment information. 
                  We never store your credit card details, and all transactions are processed securely.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">How can I check the status of my order? &darr;</button>
                <p class="answer">You can check the status of your order by logging into your account or 
                  by clicking the tracking link in your shipping confirmation email.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">Can I cancel or modify my order after it's been placed? &darr;</button>
                <p class="answer">Orders can be modified or canceled within a short window of time after being placed. 
                  Please contact us immediately if you need to make changes, and we'll do our best to accommodate your request.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">Do I need to create an account to place an order? &darr;</button>
                <p class="answer">No, you can place an order as a guest. 
                  However, creating an account allows you to track orders, save shipping details, 
                  and enjoy faster checkouts in the future.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">Can I place an order over the phone? &darr;</button>
                <p class="answer">At this time, 
                  all orders must be placed online through our website. 
                  This ensures that all your information is processed securely.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">Why was my payment declined? &darr;</button>
                <p class="answer">If your payment was declined, 
                  please double-check your card details and billing information. 
                  If the issue persists, contact your bank or try a different payment method.</p>
              </li>
              
            </ul>

          <li>Returns & Exchanges</li>
            <ul>
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">What is your return policy? &darr;</button>
                <p class="answer">Our return policy allows you to return items within 30 days of receipt. 
                  Items must be in their original condition and packaging.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">How do I initiate a return? &darr;</button>
                <p class="answer">To initiate a return, 
                  please visit our returns page and follow the instructions. 
                  You will need your order number and email address.</p>
              </li>
             
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">How long does it take to process a refund? &darr;</button>
                <p class="answer">Refunds are typically processed within 5-7 business 
                  days after we receive your returned item.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">Can I exchange an item instead of returning it? &darr;</button>
                <p class="answer">Yes, you can exchange an item. 
                  Please contact our customer service to arrange an exchange.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">Do I have to pay for return shipping? &darr;</button>
                <p class="answer">Return shipping costs are the responsibility
                   of the customer unless the item is damaged or defective.</p>
              </li>
              
              <li class="questions">
                <button class="reveal-more" onclick="revealMore(this)">What if the item I received is damaged or defective? &darr;</button>
                <p class="answer">If you receive a damaged or defective item, 
                  please contact us immediately. 
                  We will arrange for a replacement or refund.</p>
              </li>
              
            </ul>


            <li>Products</li>
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)">What shipping options do you offer? &darr;</button>
              <p class="answer">We offer standard, expedited, and overnight shipping options. 
                During checkout, 
                you can select the shipping method that best suits your needs.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)">How long will it take for my order to arrive? &darr;</button>
              <p class="answer">Delivery times vary depending on your location and the shipping method chosen. 
                Standard shipping typically takes 5-7 business days, while expedited shipping takes 2-3 business days. 
                Overnight shipping will arrive the next business day.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)">Do you offer international shipping? &darr;</button>
              <p class="answer">Yes, we ship to many countries worldwide. 
                Shipping rates and delivery times for international orders vary based on your location. 
                Please check our shipping page for more details.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)">Can I track my order? &darr;</button>
              <p class="answer">Yes, once your order is shipped, 
                you will receive a tracking number via email, 
                which you can use to track the status of your shipment.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)">What are the shipping costs? &darr;</button>
              <p class="answer">Shipping costs depend on the shipping method you select and your location. 
                You can view the shipping fees during checkout before finalizing your order.</p>
            </li>
            
            <li class="questions">
              <button class="reveal-more" onclick="revealMore(this)">What should I do if my package is lost or delayed? &darr;</button>
              <p class="answer">If your package is delayed or lost, 
                please contact our customer support team, 
                and we will help you resolve the issue by either locating your package or issuing a replacement.</p>
            </li>
            
            

              <li>Accounts & Privacy</li>
              <ul>
                <li class="questions">
                  <button class="reveal-more" onclick="revealMore(this)">How do I create an account? &darr;</button>
                  <p class="answer">You can create an account by clicking on the "Sign Up" link in the top right corner of our website. 
                    Follow the instructions to create your account in minutes.</p>
                </li>
              
                <li class="questions">
                  <button class="reveal-more" onclick="revealMore(this)">How can I reset my password? &darr;</button>
                  <p class="answer">If you&#39;ve forgotten your password, 
                    click the "Forgot Password" link on the login page and follow the prompts to reset it.</p>
                </li>
              
                <li class="questions">
                  <button class="reveal-more" onclick="revealMore(this)">What if I forget my password? &darr;</button>
                  <p class="answer">You can easily reset your password by clicking on "Forgot Password" on the login page. 
                    We will send a password reset link to your email.</p>
                </li>
              
                <li class="questions">
                  <button class="reveal-more" onclick="revealMore(this)">How can I update my account information? &darr;</button>
                  <p class="answer">You can update your account information by 
                    logging in and navigating to the "My Account" section.</p>
                </li>
              
                <li class="questions">
                  <button class="reveal-more" onclick="revealMore(this)">Is my personal information secure? &darr;</button>
                  <p class="answer">Yes, we take privacy and security very seriously. 
                    Your personal information is protected by industry-standard security measures, 
                    and we never share your information with third parties without your consent.</p>
                </li>
              
                <li class="questions">
                  <button class="reveal-more" onclick="revealMore(this)">How do I unsubscribe from your mailing list? &darr;</button>
                  <p class="answer">You can unsubscribe from our mailing 
                    list by clicking the "Unsubscribe" link at the bottom of any of our emails, 
                    or by managing your preferences in your account.</p>
                </li>
              </ul>
              


                <li>Promotions & Discounts</li>
                <ul>
                  <li class="questions">
                    <button class="reveal-more" onclick="revealMore(this)">Do you offer any discounts or promotions? &darr;</button>
                    <p class="answer">Yes, we regularly offer discounts and promotions. 
                      Be sure to sign up for our newsletter or follow us on social media to stay updated on the latest deals.</p>
                  </li>
                
                  <li class="questions">
                    <button class="reveal-more" onclick="revealMore(this)">Can I use multiple discount codes on one order? &darr;</button>
                    <p class="answer">Only one discount code can be applied per order. 
                      Discount codes cannot be combined unless stated otherwise.</p>
                  </li>
                
                  <li class="questions">
                    <button class="reveal-more" onclick="revealMore(this)">How do I apply a promo code? &darr;</button>
                    <p class="answer">To apply a promo code, simply enter the code during checkout in the "Promo Code" field and 
                      click "Apply" to update your order total.</p>
                  </li>
                
                  <li class="questions">
                    <button class="reveal-more" onclick="revealMore(this)">What do I do if my promo code doesn&#39;t work? &darr;</button>
                    <p class="answer">If your promo code isn&#39;t working, 
                      double-check that the code is entered correctly and hasn&#39;t expired. 
                      If you&#39;re still having trouble, please contact customer support for assistance.</p>
                  </li>
                </ul>
                


                  <li>Customer Support</li>
                  <ul>
                    <li class="questions">
                      <button class="reveal-more" onclick="revealMore(this)">How can I contact customer support? &darr;</button>
                      <p class="answer">You can contact our customer support team via email at support@example.com, 
                        through our online chat feature, or by calling our toll-free number at 1-800-123-4567.</p>
                    </li>
                   
                    <li class="questions">
                      <button class="reveal-more" onclick="revealMore(this)">What are your customer service hours? &darr;</button>
                      <p class="answer">Our customer service team is available Monday to Friday from 9 AM to 5 PM EST. 
                        We are closed on weekends and holidays.</p>
                    </li>
                  
                    <li class="questions">
                      <button class="reveal-more" onclick="revealMore(this)">Can I chat with customer support online? &darr;</button>
                      <p class="answer">Yes, we offer live chat support on our website during business hours. 
                        Simply click the chat icon in the bottom right corner to start a conversation with a representative.</p>
                    </li>
                  
                    <li class="questions">
                      <button class="reveal-more" onclick="revealMore(this)">Where is your company located? &darr;</button>
                      <p class="answer">Our company is located in New York City, New York. 
                        You can find our address in the "Contact Us" section of our website.</p>
                    </li>
                  
                    <li class="questions">
                      <button class="reveal-more" onclick="revealMore(this)">Do you have a loyalty or rewards program? &darr;</button>
                      <p class="answer">Yes, we offer a loyalty program where you can earn points for every purchase. 
                        Points can be redeemed for discounts on future orders. Sign up on our website to learn more!</p>
                    </li>
                  </ul>
                  
                  
        </ol>
    </div>

  <script src="../js/about.js"></script>
  <script src="../js/hamburgerMenu.js"></script>
  </body>

</html>