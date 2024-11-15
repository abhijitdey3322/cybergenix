# Project Setup Guide

This guide will help you set up Bootstrap, configure SCSS watching with Sass, and install PHPMailer for handling email functionality in this project.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
  - [1. Clone the Repository](#1-clone-the-repository)
  - [2. Install Dependencies](#2-install-dependencies)
  - [3. Set Up Sass Watcher](#3-set-up-sass-watcher)
- [Usage](#usage)
- [License](#license)

## Requirements

- **Node.js** and **npm** (for Bootstrap and Sass)
- **Composer** (for PHPMailer)
- **PHP** (for running PHP files)

## Installation

### 1. Clone the Repository

First, clone the repository to your local machine:

```bash
git clone https://github.com/yourusername/your-repo.git
cd your-repo
```
### 2. Initialize npm and Install Bootstrap

```bash
npm init -y              # Initialize npm and create a package.json file
npm install bootstrap    # Install Bootstrap as a dependency
```

### 3.  Install PHPMailer

Install PHPMailer with Composer for sending emails in PHP:

```bash
composer require phpmailer/phpmailer
```

### 4. Set Up Sass Watcher

Install Sass globally if you haven’t already:

```bash
npm install -g sass
```
Start the Sass watcher to automatically compile scss/custom.scss to css/custom.css:
```bash
sass --watch scss/custom.scss:css/custom.css
```
