import { h } from 'preact';

export default function Home() {
    return (
        <div className="home-container">
            <div className="hero-section">
                <h1 className="hero-title">Bienvenue à Lille</h1>
                <p className="hero-description">
                    Découvrez les merveilles de cette charmante ville du nord de la France.
                </p>
            </div>
            
            <div className="featured-section">
                <div className="featured-item">
                    <img src="/images/Attraction1.jpeg" alt="Attraction 1" className="featured-image" />
                    <h2 className="featured-title">La place Rihour</h2>
                    <p className="featured-description">
                    La place Rihour est une place emblématique située dans le centre-ville de Lille, en France.
                     Elle tire son nom du château de Rihour qui se trouvait autrefois à cet emplacement. 
                     La place Rihour est entourée de bâtiments historiques et est un lieu prisé des habitants et des touristes. 
                     Elle est souvent animée par des événements, des marchés et des festivals, ce qui en fait un point de rencontre populaire. 
                     La place Rihour est également connue pour sa fontaine, la fontaine de la Déesse, qui est un symbole important de la ville de Lille.
                    </p>
                </div>
                
                <div className="featured-item">
                <img src="/images/Attraction2.jpg" alt="Attraction 2" className="featured-image" />
                    <h2 className="featured-title">La place de la République</h2>
                    <p className="featured-description">
                    La place de la République est une place emblématique située au cœur de la ville de Lille, en France.
                    Elle porte ce nom en référence au régime républicain français. 
                    La place de la République est entourée de magnifiques bâtiments historiques et est un lieu animé et dynamique. 
                    Elle est souvent le point de départ de nombreuses manifestations, rassemblements et événements culturels de la ville.
                     La place offre également de vastes espaces verts, des allées piétonnes, des terrasses de café et des boutiques, 
                     ce qui en fait un lieu de rencontre et de détente pour les habitants et les visiteurs.
                     La place de la République est un symbole important de la vie urbaine lilloise et reflète l'histoire et la 
                     culture de la région.
                    </p>
                </div>
                
                <div className="featured-item">
                <img src="/images/Attraction3.jpg" alt="Attraction 3" className="featured-image" />
                    <h2 className="featured-title">Le Parc de la Citadelle</h2>
                    <p className="featured-description">
                    Le Parc de la Citadelle est un vaste espace vert situé à Lille, en France. 
                    Il occupe les terres d'une ancienne citadelle militaire construite par Vauban au XVIIe siècle. 
                    Ce parc offre une atmosphère paisible et naturelle, avec de magnifiques jardins, des sentiers sinueux, des plans d'eau et une abondance de végétation luxuriante. 
                    On peut y trouver une grande diversité d'arbres, de fleurs et d'animaux, ce qui en fait un lieu idéal pour les promenades, les pique-niques et les activités en plein air.
                    Le parc abrite également un zoo, des aires de jeux pour enfants et diverses installations sportives.
                    C'est un endroit prisé des habitants et des visiteurs de Lille, offrant un espace de détente et de loisirs au cœur de la ville.
                    </p>
                </div>
            </div>
        </div>
    );
}
