import './BubbleList.css';

function BubbleList({skills}) {
    return (
        <div className="flex-container">
            {
                skills.map((skillObject, i) => <div className="skill" style={{"color": skillObject.colour}} key={i}>{skillObject.skill}</div>)
            }
        </div>
    );
}

export default BubbleList;