import './BubbleList.css';

import colours from '../../generic/data/skillsColours.json'

function BubbleList({skills}) {
    return (
        <div className="flex-container">
            {
                skills.map((skill, i) => <div className="skill" style={{"color": colours.colours[i % colours.length]}} key={i}>{skill}</div>)
            }
        </div>
    );
}

export default BubbleList;