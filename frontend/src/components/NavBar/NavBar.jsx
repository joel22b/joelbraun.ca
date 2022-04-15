import './NavBar.css';
import logo from '../../img/logo-jb.png';

function NavBar({resumeJoelBraun}) {
    const scrollToLanding = () => {
        console.log("Scrolling to Landing");
		var landing = document.getElementById("landingSection");
		const yOffset = -100;
		const y = landing.getBoundingClientRect().top + window.pageYOffset + yOffset;
		window.scrollTo({top: y, behavior: 'smooth'});
    };

    const scrollToAbout = () => {
        console.log("Scrolling to About");
        var about = document.getElementById("aboutSection");
        const yOffset = -100;
		const y = about.getBoundingClientRect().top + window.pageYOffset + yOffset;
		window.scrollTo({top: y, behavior: 'smooth'});
    };

	const scrollToExperience = () => {
        console.log("Scrolling to Experience");
        var experience = document.getElementById("experienceSection");
        const yOffset = -100;
		const y = experience.getBoundingClientRect().top + window.pageYOffset + yOffset;
		window.scrollTo({top: y, behavior: 'smooth'});
    };

    const scrollToProjects = () => {
        console.log("Scrolling to Projects");
        var projects = document.getElementById("projectSection");
        const yOffset = -100;
		const y = projects.getBoundingClientRect().top + window.pageYOffset + yOffset;
		window.scrollTo({top: y, behavior: 'smooth'});
	};

    return (
        <nav className="navbar navbar-expand-md bg--white sticky-top">
		<div className="container-fluid">
			<a className="navbar-brand" href="index.html">
                <img src={logo} height="50" width="auto" alt=""/>
            </a>
			<button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span className="navbar-toggler-icon"></span>
			</button>
			<div className="collapse navbar-collapse" id="navbarResponsive">
				<ul className="navbar-nav ml-auto">
					<li className="nav-item">
						<a className="nav-link" onClick={scrollToLanding}>Home</a>
					</li>
					<li className="nav-item">
						<a className="nav-link" onClick={scrollToAbout}>About</a>
					</li>
					<li className="nav-item">
						<a className="nav-link" onClick={scrollToExperience}>Experience</a>
					</li>
					<li className="nav-item">
						<a className="nav-link" onClick={scrollToProjects}>Projects</a>
					</li>
					<li className="nav-item">
						<a className="nav-link" href={resumeJoelBraun} rel="noreferrer" target="_blank" download="Joel-Braun-Resume">Resume</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
    );
}

export default NavBar;