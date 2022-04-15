import React from "react";
import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link,
  useParams
} from "react-router-dom";

import { HomePage } from './components/HomePage/HomePage.jsx'
import ProjectPage from './components/ProjectPage/ProjectPage.jsx'
import AboutPage from './components/About/About.jsx'

import projectPagesJSON from './generic/data/projectPages.json'

export default function App() {
  return (
    <Router>
      <div>
        <Switch>
          <Route path="/">
            <HomePage section="about-section" />
          </Route>
          <Route path="/about">
            <HomePage section="about-section" />
          </Route>
          <Route path="/projects/:{id}" children={<ProjectsMapper />} />
        </Switch>
      </div>
    </Router>
  );
}

function ProjectsMapper() {
  // We can use the `useParams` hook here to access
  // the dynamic pieces of the URL.
  let { id } = useParams();

  let page = projectPagesJSON.pages.filter(page => page.url === id)

  console.log(id)
  console.log(page)

  return (
    <AboutPage />
  );
}
