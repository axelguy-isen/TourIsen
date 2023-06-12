import {h} from 'preact';

export default function Hotel() {
    return (
        <div class="container">
            
            <div class="highlight-box" style="font-size: 12px;">
          <h1>Hotels proches de vous :</h1>
            </div>
            <div class="carousel">
            <div class="slides">
              <div class="slide">
                <img src="images/img1.jpg" alt="Image 1"/>
                <div class="description">test!</div>
                </div>
                <div class="slide">
                <img src="images/img2.jpg" alt="Image 2"/>
                <div class="description">ouiiii test</div>
                </div>
                <div class="slide">
                 <img src="images/img3.jpg" alt="Image 3"/>
                <div class="description">encore un test</div>
                </div>
                 <div class="slide">
                <img src="images/img1.jpg" alt="Image 1"/>
                <div class="description">test!</div>
                </div>
                <div class="slide">
                <img src="images/img2.jpg" alt="Image 2"/>
                <div class="description">ouiiii test</div>
                </div>
                <div class="slide">
                 <img src="images/img3.jpg" alt="Image 3"/>
                <div class="description">encore un test</div>
                </div>
                 <div class="slide">
                <img src="images/img1.jpg" alt="Image 1"/>
                <div class="description">test!</div>
                </div>
                <div class="slide">
                <img src="images/img2.jpg" alt="Image 2"/>
                <div class="description">ouiiii test</div>
                </div>
                <div class="slide">
                 <img src="images/img3.jpg" alt="Image 3"/>
                <div class="description">encore un test</div>
                </div>
            </div>
            </div>
            <div class="container2">
            <button onclick="getLocation()" style="margin-bottom: 20px;">Obtenir ma position</button>
            <div id="map" style="height: 800px; width: 800px;"></div>
        </div>




        </div>
    );
};