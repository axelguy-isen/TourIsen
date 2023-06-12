import { h } from 'preact';
import { showMap, handleLocationError, getLocation } from './script';

export default function Home() {
    const handleClick = () => {
        getLocation(); // Appelez la fonction getLocation lorsque le bouton est cliqué
      };

    return (
        <div class="container">
            <div class="container2">
                <div class="highlight-box">
                    <h1>Lille</h1>
                </div>
                <div style="display: flex; justify-content: center; margin-bottom: 20px;">
                    <img src="images/img4.jpg" class="image-resize" alt="Image 4" />
                </div>
                <div class="highlight-box">
                    <p>
                        Lille est la capitale des Hauts-de-France, une région du nord de la France. Elle se trouve à
                        proximité de la frontière belge. Aujourd'hui centre culturel et ville universitaire animée, elle
                        fut autrefois une importante plateforme marchande des Flandres françaises, et de nombreuses
                        influences flamandes demeurent encore. Le centre historique, le Vieux Lille, se caractérise par
                        ses maisons de ville du XVIIe siècle en briques rouges, ses ruelles piétonnes pavées et sa
                        Grand'Place centrale.
                    </p>
                </div>
            </div>
            <div class="carousel">
            <div class="slides">
                <div class="slide">
                    <div class="review">
                        <h2>Titre de l'avis</h2>
                        <div class="rating">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <p>Contenu de l'avis...</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="review">
                        <h2>Titre de l'avis</h2>
                        <div class="rating">
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <p>Contenu de l'avis...</p>
                    </div>
                </div>
            </div>
            <div class="container2">
            <button onClick={handleClick} style="margin-bottom: 20px;">
            Obtenir ma position
          </button>
            <div id="map" style="height: 800px; width: 800px;"></div>
        </div>
        </div>
        </div>
    );
}
