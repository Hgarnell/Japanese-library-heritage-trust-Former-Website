<?php include 'topbit.php' ?>
    <link rel="stylesheet" href="css/bodystyle.css">

<?php include 'regheader.php' ?>
    <div> <a href="jp_library.php" class="button_1 box">日本語</a></div>
        </div><!--closing for mobileheader-->    

        
        <header class="box">

            <div class="button_group box">
				<a href="/jp_library.php" class="button_1">日本語</a>
				<a href="/donation.php" class="button_2">Donate!</a>
				<a href="/volunteerform.php" class="button_2">Volunteer!</a>
			</div> <!-- closes button div-->

            <div class="header_item box">
               <?php include"headeritem.php"?>
            </div> <!-- closes header_item div-->
        </header>

        <div class="photo box paddingbottom">
			<img src="image/childlib1.jpg" alt=" grid photo 1" class="imgphoto"/>
        </div> <!-- closes photo div-->

        <div class="content1 box">
            
            <h2>The Library </h2>
            <p> Our Japanese Picture Book Library is a community library in Glenfield North Shore City. We have more than 7500 children's books. Our objectives are to run this library to assist children who are either born in Japan or have Japanese parents living in New Zealand to enjoy books written in the Japanese language. Encourage children to enjoy and develop their affinity for books, and to support and develop their reading habits and attitudes toward their life through books. </p>
        </div><!-- closes content1 div-->


        <div class="main_div innershadow">
            <div id="tabs" class="buttons">
                <a class="tabs active" href="#Menu1">More Info</a> 
                <a class="tabs" href="#Menu2">Fees</a> 
                <a class="tabs" href="#Menu3">Rules</a> 
               <a class="tabs" href="#Menu4">Hours</a> 
            </div><!-- closes tabs div--> 
        </div><!--closes main_div-->
 
          <div class="side innershadow"> <!-- puts in div next to so its not child of main_div-->
            <div id="tabcontent" class="inner_div">
                <!-- Gives information for each id-->
                <div class="tabcontent active" id="Menu1">
                    <h2>How we work</h2>
                    <p>The Japanese Language Succession Center mainly provides Japanese language learning programs for long-term residents and permanent residents. We conduct Japanese language education and Japanese culture education as heritage language. All classes are conducted in Japanese. The Center has three departments: a succession department for permanent residents in New Zealand, an international department for students of permanent residents as an acquisition course in Japanese language and culture, and a kindergarten for children aged 2 to 5 years old.</p>
                </div>

                <div class="tabcontent" id="Menu2">
                    <h2>Fees</h2>
                    <p>Family/Individual Annual Membership Fee: $65<br>
                    &emsp;Borrowing Limit: 10 books<br>
                    &emsp;Borrowing Period: 4 weeks<br>
                    Play Group Annual Membership Fee: $100<br> 
                    Corporation/Group Annual Membership Fee:$300<br>
                    &emsp;Borrowing Limit: 50 books<br>
                    &emsp;Borrowing Period: 1 School Term<br>You will need proof of your current residential address. Under the age of 13, you will need a parent or guardian with you when you join.<br></p>
                </div>

                <div class="tabcontent " id="Menu3">
                    <h2>Rules</h2>
                    <p>Members can issue a maximum of 10 books. Keep the due dates. Private members return books within 5 weeks. Regarding the group members, the duration of the book borrowing is set in an agreement. When books are overdue after the 2 months period, an overdue fee will apply‐charge will be 50 cents per day. </p>
                </div>

                <div class="tabcontent " id="Menu4">
                    <h2>Hours</h2>
                    <p>Mon - Fri :9am - 3pm</br>
                    Sat: 12pm - 5pm</br> Public Holidays Closed</p>
                </div>
                    
            </div><!-- closes tabcontent div-->

          </div><!-- closes side div-->

        <!-- Java script for the slide -->
        <script src="java/slide.js"></script>


        <div class="content4 box"> 
		
			<img src="image/library2.png" alt="heritage centre bottom"  class="bottomimg"/>
				<div class="smallinfo box">
				    <p>We hold storytimes often at both our library in Glenfield but also at Orewa library located in Orewa. Please go to our facebook page for more information</p>		
                    <a href = "http://facebook.com/inchJ"  target="_blank" class="button_3">Learn More</a>
                    </a>
                </div> <!-- closes small info div-->
        </div><!-- closes content4 div-->
<?php include 'bottombit.php' ?>