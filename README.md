# Backend Http Architecture (LAMP)

<a href="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/docs/nginx.jpg"><img src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/docs/nginx.jpg" alt="Full-Stack JavaScript Architecture" /></a>

This Project architecture for LAMP applications.


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
      |-- root/etc/nginx
      |   |
      |   |-- conf.d
      |   |   >  default.conf
      |   |   >  www_transaction_api.conf
      |   |   >  www_transaction_backend.conf
      |   |   >  www_transaction_cache.conf
      |   |-- fastcgi_params
      |   |-- nginx.conf
      |   |__ proxy_params
      |
      |-- server-php
      |   |
      |   |-- assets
      |   |   |-- css
      |   |   |   > Bootstrap
      |   |   |   > Style
      |   |   |
      |   |   |__ scripts
      |   |       > JQuery
      |   |       > autocomplete JS
      |   |
      |   |-- components
      |   |   > Menu
      |   |   > Header
      |   |   > Forms
      |   |
      |   |-- pages
      |   |   > Home
      |   |   > Signup
      |   |   > Signin
      |   |   > Transaction
      |   |
      |   |-- functions
      |       > Authentification
      |       > Autocompletion
      |       > Transaction ($$)
      |
      |-- server-node
      |   |
      |   | > app.js
      |   | > package.json.js
      |   |
      |   |-- routes
      |   |   > transaction.routes.js
      |   |   > user.routes.js
      |   |   > .env
      |
      |-- cache
      |   |
      |   |-- data
      |   |-- logs
      |
      |__ README.md (you are here)

## Stack

### Backend
- API
    - Restful API
    - Server Side Rendering
- Database
    - MySQL
- Proxy
    - NGINX

### Frontend
- Landing
    - HTML, CSS
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
    - UBUNTU (`v18.04`)
    - NodeJS (`v16.17`)
    - Fastify (`v4.11.0`)
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
        - Modify `.env` for
            - `DB_HOST` (`localhost`)
            - `DB_NAME` (`rsd418`)
            - `DB_PORT` (`3306`)
            - `DB_USER` (``)
            - `DB_PASS` (``)
            - `DB_DIALECT` (`mysql`)
    - Setup
        - Install dependencies: `npm install`
    - Run
        - Start Web server: `npm start`, browse at http://api.transaction.cm:5000
       
     
## Screenshots

View all screenshots [here](https://github.com/atulmy/atulmy.github.io/tree/master/images/fullstack-javascript-architecture).

<table>
  <tbody>
    <tr>
      <td colspan="2"> <font size=3>Authentication</font></td>
    </tr>
    <tr>
      <td>
        <img alt="Landing" src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/screenshots/signup.png" /> &rarr; Signup
      </td>
      <td>
        <img alt="Landing" src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/screenshots/signin.png" />  &rarr; Signin
      </td>
    </tr>
    <tr>
      <td colspan="2"> <font size=3>Users</font></td>
    </tr>
    <tr>
      <td>
        <img alt="Web" src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/screenshots/users.png" /> &rarr; List of all the users
      </td> 
      <td>
        <img alt="Web" src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/screenshots/user-detail.png" /> &rarr; Ange's transaction
      </td>
   </tr>
    <tr>
      <td colspan="2"> <font size=3>Transaction</font></td>
    </tr>
    <tr>
      <td>
        <img alt="Web" src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/screenshots/new-transaction.png" /> &rarr; Create a new transaction
      </td>
    </tr>
    <tr>
      <td colspan="2"> <font size=3>Cache</font></td>
    </tr>
    <tr>
      <td>
        <img alt="Web" src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/screenshots/cache-inspection.png" /> &rarr; Inspection
      </td>
    </tr>
    <tr>
      <td>
        <img alt="Web" src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/screenshots/X-proxy-Cache.png" /> &rarr; X-proxy-Cache Missed 
      </td>
      <td>
        <img alt="Web" src="https://raw.githubusercontent.com/tekeuange23/backend-http-architecture/master/images/screenshots/X-proxy-Cache-Hit.png" /> &rarr; X-proxy-Cache Hit
      </td>
   </tr>
  </tbody>
</table>

## Authors
- Ange TEKEU - [GitHub](https://github.com/tekeuange23) - [Twitter](https://twitter.com/TekeuAnge)

## Collaborators
- [YOUR NAME HERE] - Feel free to contribute to the codebase by resolving any open issues, refactoring, adding new features, writing test cases or any other way to make the project better and helpful to the community. Feel free to fork and send pull requests.

## License

The MIT License (http://www.opensource.org/licenses/mit-license.php)
