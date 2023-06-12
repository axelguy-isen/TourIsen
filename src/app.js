import { render, useState, useEffect } from 'preact/compat';
import { h } from 'preact';
import { Router, Link } from 'preact-router';
import Home from './pages/home';
import Conference from './pages/conference';
import Restaurant from './pages/restaurant';
import Hotel from './pages/hotel';
import About from './pages/about';
import Monument from './pages/monuments';
import '../assets/styles/app.css';

function App() {
    const [parcs, setParcs] = useState([]);

    useEffect(() => {
        // Fetch the list of parcs from the API
        fetch('https://opendata.lillemetropole.fr/api/records/1.0/search/?dataset=parcs-jardins-lille-hellemmes-lomme-emprise&q=Parc&facet=quartier&facet=types')
            .then(response => response.json())
            .then(data => {
                const parcRecords = data.records || [];
                const parcList = parcRecords.map(record => ({
                    id: record.recordid,
                    name: record.fields.nom,
                    slug: record.fields.slug
                }));
                setParcs(parcList);
            });
    }, []);

    return (
        <div>
            <header className="header">
                <nav className="navbar navbar-light bg-light">
                    <div className="container">
                        <Link className="navbar-brand mr-4 pr-2" href="/">
                            TourIsen
                        </Link>
                        <Link className="nav-link" href="/monuments">
                            Monuments
                        </Link>
                        <Link className="nav-link" href="/hotels">Hotels</Link>
                        <Link className="nav-link" href="/restaurants">Restaurants</Link>
                        <Link className="nav-link" href="/about">A propos</Link>

                    </div>
                </nav>
            </header>

            <Router>
                <Home path="/" />
                <Conference path="/parc" parcs={parcs} />
                <Monument path="/monuments" />
                <Hotel path="/hotels" />
                <Restaurant path="/restaurants" />
                <About path="/about" />

            </Router>
        </div>
    );
}

render(<App />, document.getElementById('app'));
