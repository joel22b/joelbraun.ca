import './App.css';
import NavBar from './components/NavBar/NavBar.jsx';
import ContactBar from './components/ContactBar/ContactBar.jsx';
import Landing from './components/Landing/Landing.jsx';
import About from './components/About/About.jsx';
import Projects from './components/Projects/Projects.jsx';

function App() {
  return (
    <div className="App">
      <NavBar />
      <ContactBar />
      <Landing />
      <About />
      <Projects />
    </div>
  );
}

export default App;
