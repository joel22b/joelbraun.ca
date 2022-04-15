import './Project.css';
import { useState } from "react";

function Project({ props }) {
    const [hoverVisible, setHoverVisible] = useState(false)

    const hoverShow = () => {
        setHoverVisible(true)
    }

    const hoverHide = () => {
        setHoverVisible(false)
    }

    return (
        <div className="Project" onMouseEnter={() => hoverShow()} onMouseLeave={() => hoverHide()}>
            <img src={props.image} className="Project-image Project-rounded-corners" alt="" />
            {
                props.link !== "" ?
                    <a className="Project-image" href={props.link} rel="noreferrer" target="_blank">
                        <div className="Project-semitransparent Project-rounded-corners">
                        {
                            hoverVisible ?
                                <div>
                                    <h4 className="Project-header">{props.name}</h4>
                                    <p className="Project-desc">{props.desc}</p>
                                </div>
                            :
                                <></>
                        }
                        </div>
                    </a>
                :
                    <div className="Project-semitransparent Project-rounded-corners">
                    {
                        hoverVisible ?
                            <div>
                                <h4 className="Project-header">{props.name}</h4>
                                <p className="Project-desc">{props.desc}</p>
                            </div>
                        :
                            <></>
                    }
                    </div>
            }
        </div>
    );
}

export default Project;
