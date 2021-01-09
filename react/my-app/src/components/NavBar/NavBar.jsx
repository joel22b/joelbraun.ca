import './NavBar.css';
import logo from '../../img/logo-jb.png';

function NavBar() {
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
						<a class="nav-link" href="index.html#landing-section">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html#about-section">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.html#projects-section">Projects</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="resume.html">Resume</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact Me</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
    );
}

export default NavBar;