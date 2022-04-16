import './NavBar.css';
import logo from '../../img/logo-jb.png';

function NavBar({resumeJoelBraun}) {
	const scrollTo = (elementId) => {
		var element = document.getElementById(elementId);
		const yOffset = -100;
		const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
		window.scrollTo({top: y, behavior: 'smooth'});
	}

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
						<a className="nav-link" onClick={() => scrollTo("landingSection")}>Home</a>
					</li>
					<li className="nav-item">
						<a className="nav-link" onClick={() => scrollTo("projectSection")}>Projects</a>
					</li>
					<li className="nav-item">
						<a className="nav-link" onClick={() => scrollTo("aboutSection")}>About</a>
					</li>
					<li className="nav-item">
						<a className="nav-link" onClick={() => scrollTo("experienceSection")}>Experience</a>
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