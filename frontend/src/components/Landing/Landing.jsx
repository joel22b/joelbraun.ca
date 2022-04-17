import './Landing.css';
import Preloader from '../Preloader/Preloader.jsx';
import bgImg from '../../img/circuit-bg.png';

import Typed from 'react-typed';
import typingText from '../../generic/data/typingTextLandingTitle.json';

function Landing() {
    return (
        <div>
            <Preloader />
            <header className="header-page header-fullscreen overlay" id="landingSection">
                <div className="wrap-bg">
                    <figure className="js-image jarallax reveal">
                        <img src={bgImg} className="jarallax-img" alt="" />
                        <div className="semitransparent"/>
                    </figure>
                </div>
                <div className="container flex-center-end js-opacity">
                    <div className="flex-center">
                        <div className="flex-center__inner">
                            <h1 className="title title--display js-lines-l">Hi, I'm <span className="text--blue">Joel Braun</span></h1>
                            <h1 className="title title--display js-lines-l">
                                <Typed strings={typingText.text} typeSpeed={75} backSpeed={50} backDelay={2000} loop smartBackspace />
                            </h1>
                            <div className="js-lines"></div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    );
}

export default Landing;