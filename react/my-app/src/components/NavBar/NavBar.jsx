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

    const scrollToProjects = () => {
        console.log("Scrolling to Projects");
        var projects = document.getElementById("projectSection");
        const yOffset = -100;
		const y = projects.getBoundingClientRect().top + window.pageYOffset + yOffset;
		window.scrollTo({top: y, behavior: 'smooth'});
	};

    return (
        <nav class="navbar navbar-expand-md bg--white sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">
                <img src={logo} height="50" width="auto" alt=""/>
            </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" onClick={scrollToLanding}>Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" onClick={scrollToAbout}>About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" onClick={scrollToProjects}>Projects</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href={resumeJoelBraun} rel="noreferrer" target="_blank" download="Joel-Braun-Resume">Resume</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
    );
}

export default NavBar;