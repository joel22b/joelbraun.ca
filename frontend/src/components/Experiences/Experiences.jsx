import {React, useState} from 'react';

import './Experiences.css';
import Experience from '../Experience/Experience';

import experiencesJSON from '../../generic/data/experiences.json';

import companyLogoOANDA from '../../img/company-logo-oanda.png';
import companyLogoCARFAX from '../../img/company-logo-carfax.png';
import companyLogoNCR from '../../img/company-logo-ncr.png';
import companyLogoWestheightsCC from '../../img/company-logo-westheights-cc.png';
import companyLogoForestHeightsCI from '../../img/company-logo-forest-heights-ci.png';
import companyLogoCampKahquah from '../../img/company-logo-camp-kahquah.png';
import companyLogoUW from '../../img/company-logo-uw.png';
import companyLogoDefault from '../../img/company-logo-default.png';

function Experiences() {
    const [expandExp, setExpandExp] = useState([]);

    const handleExpand = (index) => {
        setExpandExp(currExpand => {
            return [
                ...currExpand.slice(0, index),
                currExpand[index] = 1,
                ...currExpand.slice(index + 1)
            ]
        })
    }

    const handleCollapse = (index) => {
        setExpandExp(currExpand => {
            return [
                ...currExpand.slice(0, index),
                currExpand[index] = 0,
                ...currExpand.slice(index + 1)
            ]
        })
    }

    return (
        <div className="section" id="experienceSection">
            <h1 className="section-header">Experiences</h1>
            {
                experiencesJSON.map((exp, i) => {
                    if (expandExp.length < experiencesJSON.length) {
                        setExpandExp(arr => [...arr, 0]);
                    }

                    return <div className="item" key={i}>
                        <h2 className="header Experiences-header">{exp.name}</h2>
                        {
                            exp.experience.map((expItem, j) => {
                                expItem.logo = experienceLogoMapper(expItem.logoName);

                                if (expandExp[i]) {
                                    return <Experience props={expItem} key={j} />
                                }
                                else if (j < exp.show) {
                                    return <Experience props={expItem} key={j} />
                                }
                                else {
                                    exp.needExpand = true;
                                }
                            })
                        }
                        {
                            exp.needExpand 
                                ? <div>
                                    {
                                        expandExp[i]
                                            ? <button type="button" onClick={() => handleCollapse(i)} className="btn btn-outline-dark btn-md">Collapse</button> 
                                            : <button type="button" onClick={() => handleExpand(i)} className="btn btn-outline-dark btn-md">Expand</button> 
                                    }
                                </div>
                                : <div/>
                        }
                    </div>
                })
            }
        </div>
    );
}

const experienceLogoMapper = (logoName) => {
    let logo = companyLogoDefault;
    switch(logoName) {
        case 'companyLogoOANDA':
            logo = companyLogoOANDA
            break
        case 'companyLogoCARFAX':
            logo = companyLogoCARFAX
            break
        case 'companyLogoNCR': 
            logo = companyLogoNCR
            break
        case 'companyLogoWestheightsCC': 
            logo = companyLogoWestheightsCC
            break
        case 'companyLogoForestHeightsCI': 
            logo = companyLogoForestHeightsCI
            break
        case 'companyLogoCampKahquah': 
            logo = companyLogoCampKahquah
            break
        case 'companyLogoUW': 
            logo = companyLogoUW
            break
    }
    return logo;
}

export default Experiences;