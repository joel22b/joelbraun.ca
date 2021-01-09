import './Landing.css';
import Preloader from '../Preloader/Preloader.jsx';
import bgImg from '../../img/circuit-bg.png';

function Landing() {
    return (
        <div>
            <Preloader />
            <header className="header-page header-fullscreen overlay" id="landing-section">
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
                            <h1 className="title title--display js-lines-l">Computer Engineer</h1>
                            <div className="js-lines"></div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    );
}

export default Landing;