# Backend Http Architecture (LAMP)

<a href="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/docs/neuralnets-nginx.jpg"><img src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/docs/neuralnets-nginx.jpg" alt="Full-Stack JavaScript Architecture" /></a>

Project architecture for LAMP applications.


## About
Using JavaScript for full-stack has always been a challenge especially with architecting various pieces of the application, choosing technologies and managing devOps. This project provides a base for typical project consisting a Landing Website and Web applications, API service and easy deployment of these services. This project uses a microservice architecture where all individual project runs as a service (container).

A typical product (SaaS, etc.) usually consists of following services:
- Landing page
    - Used for introducing your business to customers
    - Provide links to download the mobile application
    - Provide link to access web application
    - Contact page
    - Privacy policy page
    - Terms of use page
    - SEO friendly (should support server side rendering)
    
- Web Application
    - Your actual application for your customers to use
    - Desktop browser
    - Tablet and mobile browser via responsive design

## Core Structure
    bha
      ??? /etc/nginx
      ?   ??? conf.d
      ?   |   ??? default.conf
      ?   |   ??? www_lamp_transaction.conf
      |   ??? nginx.conf
      |   ??? fastcgi_params
      |
      ??? assets
      ?   ??? css
      ?   ?   > Bootstrap
      ?   ?   > Style
      ?   ?
      ?   ??? scripts
      ?       > JQuery
      ?       > autocomplete JS
      |
      ??? components
      ?   > Menu
      ?   > Header
      ?   > Forms
      |
      ??? pages
      ?   > Home
      ?   > Signup
      ?   > Signin
      ?   > Transaction
      ?
      ??? functions
      ?   > Authentification
      ?   > Autocompletion
      ?   > Transaction ($$)
      ?
      ??? logs
      ?   > Error Logs
      ?
      ??? README.md (you are here)

## Stack

### Backend
- API
    - PHP
    - Server Side Rendering
- Database
    - MySQL
- Proxy
    - NGINX

### Frontend
- Landing
    - Html
    - Css
    - Server Side Rendering
    - Bootstrap

- Web
    - JQuery
    - Bootstrap
        
### Deployment
- Technologies
    - Linux

## Setup and Running
- Prerequisites
    - Node (`v14.x`)
    - PHP (`v7.2`)
    - Bootstrap (`v3.5`)

- Clone repository `git clone git@github.com:tekeuange23/backend-http-architecture.git`

- **API**
    - Info
      - Authentication strategy: [Session Cookies](https://www.php.net/manual/en/book.session) (Cookies-Session)
      - Uses [RPC](https://www.jsonrpc.org/) (Remote Procedure Call) for API endpoints (one endpoint URL, multiple operations)
      - Resources
        - [Lightweight RPC API pattern](https://github.com/atulmy/wispy)
- **Web**
    - Switch to `web` directory `cd frontend/app/web`
    - Configuration
        - Create local environment file `cp .env.dev.example .env.local`
        - Modify `.env.local` for
            - `PORT` (`5000`)
            - `REACT_APP_LANDING_URL` (`http://localhost:3000`)
            - `REACT_APP_WEB_URL` (`http://localhost:5000`)
            - `REACT_APP_API_URL` (`http://localhost:8000`)
    - Setup
        - Install dependencies: `npm install`
    - Run
        - Start Web server: `npm start`, browse at http://localhost:5000

- **Deployment**
    - Deploy code
        1. Login to the server (SSH)
        2. Create a new directory on server: `mkdir /var/www/fullstack` and switch to the directory `cd /var/www/fullstack`
        3. Clone repository `git clone git@github.com:atulmy/fullstack-javascript-architecture.git .`
        4. Switch to `deployment` directory `cd deployment`
        5. Build containers `docker-compose up --build -d`
            - `up` = Builds, (re)creates, starts, and attaches to containers for a service.
            - `--build` = Build images before starting containers
            - `-d` = Detached mode: Run containers in the background, print new container names
    - Resources
           - [Set Up Free SSL Certificates from Let's Encrypt using Docker and Nginx](https://humankode.com/ssl/how-to-set-up-free-ssl-certificates-from-lets-encrypt-using-docker-and-nginx)
        6. Re-deploy with following steps:
            - Change directory `cd /var/www/fullstack`
            - Pull latest code `git pull`
            - Rebuild containers: `docker-compose up --build -d`
       
     
## Screenshots

View all screenshots [here](https://github.com/atulmy/atulmy.github.io/tree/master/images/fullstack-javascript-architecture).

<table>
  <tbody>
    <tr>
      <td colspan="2">Landing</td>
    </tr>
    <tr>
      <td>
        <img alt="Landing" src="https://raw.githubusercontent.com/atulmy/atulmy.github.io/master/images/fullstack-javascript-architecture/landing/Screenshot%202018-11-26%20at%208.42.33%20PM.png" />
      </td>
      <td>
        <img alt="Landing" src="https://raw.githubusercontent.com/atulmy/atulmy.github.io/master/images/fullstack-javascript-architecture/landing/Screenshot%202018-11-26%20at%208.42.44%20PM.png" />
      </td>
    </tr>
    <tr>
      <td colspan="2">Web</td>
    </tr>
    <tr>
      <td>
        <img alt="Web" src="https://raw.githubusercontent.com/atulmy/atulmy.github.io/master/images/fullstack-javascript-architecture/web/Screenshot%202018-11-26%20at%208.43.29%20PM.png" />
      </td>
      <td>
        <img alt="Web" src="https://raw.githubusercontent.com/atulmy/atulmy.github.io/master/images/fullstack-javascript-architecture/web/Screenshot%202018-11-26%20at%208.44.25%20PM.png" />
   

## Authors
- Samuel Arogbonlo - [GitHub](https://github.com/samuelarogbonlo) ? [Twitter](https://twitter.com/samuelarogbonlo)

## Collaborators
- [YOUR NAME HERE] - Feel free to contribute to the codebase by resolving any open issues, refactoring, adding new features, writing test cases or any other way to make the project better and helpful to the community. Feel free to fork and send pull requests.

## Resources and Inspirations
- ????? Hand picked collection of packages, tutorials and more for React Native - [GitHub](https://github.com/atulmy/react-native-curated)
- ?? Lightweight (remote procedure call) API pattern - [GitHub](https://github.com/atulmy/wispy)
- ?? A simple validation library for server and client side applications - [GitHub](https://github.com/atulmy/fullstack-validator) &bull; [NPM](https://www.npmjs.com/package/fullstack-validator)
- ?? Universal react application with server side rendering - [GitHub](https://github.com/atulmy/universal-react)
- ?? A sample web and mobile application built with Node, Express, React, React Native and Redux - [GitHub](https://github.com/atulmy/crate)
- Start learning by looking at sample codes on GitHub: [#LearnByExamples](https://github.com/topics/learn-by-examples)

## Hire me
Looking for a devops engineer to build your next infrastruture to work remotely? Get in touch: [sbayo971@gmail.com](mailto:sbayo971@gmail.com)


## License

The MIT License (http://www.opensource.org/licenses/mit-license.php)
