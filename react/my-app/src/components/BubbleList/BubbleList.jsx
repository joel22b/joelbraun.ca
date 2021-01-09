import './BubbleList.css';

function BubbleList({skills}) {
    return (
        <div className="flex-container">
            {
                skills.map(skillObject => <div className="skill" style={{"color": skillObject.colour}} >{skillObject.skill}</div>)
            }
        </div>
    );
}

export default BubbleList;