import './Experience.css';

function Experience({props}) {
    return (
        <div className="experience row">
            <div className="left-column">
                <img src={props.logo} className="company-logo top" alt=""/>
            </div>
            <div className="right-column">
                <div className="vertical-center">
                    <div className="title-left">
                        <h3 className="sub-header reduced-margin">{props.role}</h3>
                        <h3 className="sub-header reduced-margin">{props.company}</h3>
                    </div>
                    <div className="title-right">
                        <h3 className="sub-header reduced-margin" style={{"textAlign": "right"}}>{props.date}</h3>   
                   </div>
                   <div style={{"clear": "both"}}/>
                </div>
            </div>
            <div className="left-column">
                <div className="vertical-line"/>
            </div>
            <div className="right-column">
                <ul>
                    {
                        props.points.map((point, i) => <li className="bullet-point" key={i}>{point}</li>)
                    }
                </ul>
            </div>
        </div>
    );
}

export default Experience;