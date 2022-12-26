# Backend Http Architecture (LAMP)

<a href="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/docs/nginx.jpg"><img src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/docs/nginx.jpg" alt="Full-Stack JavaScript Architecture" /></a>

Project architecture for LAMP applications.


## About
Using LAMP stacks for full-stack has always been a challenge especially with architecting various pieces of the application, choosing technologies and managing devOps. This project provides a base for typical project consisting a Landing Website and Web applications, API service and easy deployment of these services on a linux environment. This project uses a microservice architecture.

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
      |   ??? conf.d
      |   |   >  default.conf
      |   |   >  www_lamp_transaction.conf
      |   ??? nginx.conf
      |   ??? fastcgi_params
      |
      ??? assets
      |   ??? css
      |   |   > Bootstrap
      |   |   > Style
      |   |
      |   ??? scripts
      |       > JQuery
      |       > autocomplete JS
      |
      ??? components
      |   > Menu
      |   > Header
      |   > Forms
      |
      ??? pages
      |   > Home
      |   > Signup
      |   > Signin
      |   > Transaction
      |
      ??? functions
      |   > Authentification
      |   > Autocompletion
      |   > Transaction ($$)
      |
      ??? logs
      |   > Error Logs
      |
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
    - UBUNTU (`>= v14.x`)
    - PHP (`v7.2`)
    - Bootstrap (`v3.5`)

- Clone repository `git clone git@github.com:tekeuange23/backend-http-architecture.git`

- **Server**
    - Info
      - Authentication strategy: [Session Cookies](https://www.php.net/manual/en/book.session) (Cookies-Session)
      - Uses [RPC](https://www.jsonrpc.org/) (Remote Procedure Call) for API endpoints (one endpoint URL, multiple operations)
      - Resources
        - [FullstackApp](https://github.com/Dropcodee/fullstackJSTestApp)
- **OS**
    - Configuration
        - The `root` folder representt the key files which need update in the Linux OS.
- **Web**
    - Configuration
        - Modify `.env.local` for
            - `PORT` (`80`)
            - `URL` (`http://transaction.cm`)
    - Setup
        - Install dependencies: `npm install`
    - Run
        - Start Web server: `npm start`, browse at http://localhost:5000
       
     
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
   </tr>
  </tbody>
</table>

## Authors
- Ange TEKEU - [GitHub](https://github.com/tekeuange23) - [Twitter](https://twitter.com/TekeuAnge)

## Collaborators
- [YOUR NAME HERE] - Feel free to contribute to the codebase by resolving any open issues, refactoring, adding new features, writing test cases or any other way to make the project better and helpful to the community. Feel free to fork and send pull requests.

## License

The MIT License (http://www.opensource.org/licenses/mit-license.php)
