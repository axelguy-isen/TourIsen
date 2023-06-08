import { h } from 'preact';

export default function Conference({ parcs }) {
    return (
        <div>
            <h1>Liste des Parcs</h1>
            <ul>
                {parcs.map(parc => (
                    <li key={parc.id}>{parc.name}</li>
                ))}
            </ul>
        </div>
    );
};
