
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: "Roboto", sans-serif;
  margin: 0;
  padding: 0;
  height: 100%;
background-color: #1a598c91;
}

.screen-container {
  height: 100%;
}

/* Compose */

.conversation-compose {
 display: flex;
    flex-direction: row;
    align-items: flex-end;
    overflow: hidden;
    height: 58px;
    width: 100%;
    z-index: 2;
    margin-bottom: 0;
    background: #1a598c;
    color: #000;
    padding: 0 8px;
    font-size: 24px;
    position: relative;
    z-index: 1;
    border-radius: 10px 10px 10px 10px;
    border-style: solid;
}

.conversation-compose div,
.conversation-compose input {
  background: #fff;
  height: 100%;
}

.conversation-compose .emoji {
  display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border-radius: 5px 0 0 5px;
    flex: 0 0 auto;
    margin-left: -14px;
    width: 48px;
}


.conversation-compose .input-msg {
  border: 0;
  flex: 1 1 auto;
  font-size: 16px;
  margin: 0;
  outline: none;
  min-width: 50px;
}

.conversation-compose .photo {
  flex: 0 0 auto;
  border-radius: 0 0 5px 0;
  text-align: center;
  position: relative;
  width: 48px;
}


.conversation-compose .photo:after {
  border-width: 0px 0 10px 10px;
  border-color: transparent transparent transparent #fff;
  border-style: solid;
  position: absolute;
  width: 0;
  height: 0;
  content: "";
  top: 0;
  right: -10px;
}

.conversation-compose .photo i {
  display: block;
  color: #7d8488;
  font-size: 24px;
  transform: translate(-50%, -50%);
  position: relative;
  top: 50%;
  left: 50%;
}


.conversation-compose .send {
  background: transparent;
    border: 0;
    cursor: pointer;
    flex: 0 0 auto;
    margin-left: 8px;
    margin-right: -12px;
    padding: 0;
    position: relative;
    outline: none;
}

.conversation-compose .send .circle {
 background: #000000;
    border-radius: 50%;
    color: #fff;
    position: relative;
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.conversation-compose .send .circle i {
  font-size: 24px;
  margin-left: 5px;
}

/* Compose  end */


 .fixed-footer{
        width: 100%;
        position: fixed;        
        bottom: 0;
        background: #1a598c;
        
    }
    

    .fixed-header{
        top: 0;
        position: absolute;
    }
    
        
 



/* Conversation */

.conversation {
  height: calc(100% - 0px);
  position: relative;
  
  z-index: 0;
}

}

.conversation ::-webkit-scrollbar {
  transition: all .5s;
  width: 5px;
  height: 1px;
  z-index: 10;
}

.conversation ::-webkit-scrollbar-track {
  background: transparent;
}

.conversation ::-webkit-scrollbar-thumb {
  background: #b3ada7;
}


.conversation .conversation-container {
 height: calc(100% - 57px);
    box-shadow: inset 0 10px 10px -10px #000000;
    overflow-x: hidden;
    padding: 0 16px;
    margin-bottom: 5px;
    /* height: 55px; */
    background: #1a598c;
     color: #000;
    padding: 0 8px;
    font-size: 24px;
    position: relative;
    z-index: 1;
    border-radius:10px 10px 10px 10px;
    border-style: solid;
}

.conversation .conversation-container:after {
  content: "";
  display: table;
  clear: both;
}

/* Chat */

.chat {
  height: calc(100% - 55px);
}

.chat-container {
  height: 100%;
  background: #1a598c;
}


/* User Bar */

.user-bar {
 height: 55px;
    background: #1a598c;
    color: #000;
    padding: 0 8px;
    font-size: 24px;
    position: relative;
    z-index: 1;
    border-radius: 21px 21px 10px 10px;
    border-style: solid;
}

.user-bar:after {
  content: "";
  display: table;
  clear: both;
}


.user-bar div {
  float: left;
  transform: translateY(-50%);
  position: relative;
  top: 50%;
}

.user-bar .actions {
  float: right;
  margin: 0 0 0 20px;
}

.user-bar .actions.more {
  margin: 0 12px 0 32px;
}

.user-bar .actions.attachment {
  margin: 0 0 0 30px;
}

.user-bar .actions.attachment i {
  display: block;
  transform: rotate(-45deg);
}


.user-bar .avatar {
  margin: 0 0 0 5px;
  width: 36px;
  height: 36px;
}

.user-bar .avatar img {
  border-radius: 50%;
  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
  display: block;
  width: 100%;
}

.user-bar .name {
  font-size: 17px;
    font-weight: 600;
    text-overflow: ellipsis;
    letter-spacing: 0.3px;
    margin: 0 0 0 8px;
    overflow: hidden;
    white-space: nowrap;
    width: 110px;
    color: #fff;
}
.user-bar .status {
  display: block;
  font-size: 13px;
  font-weight: 400;
  letter-spacing: 0;
}



/* User Bar end */



/* Messages */


.message {
  color: #000;
  clear: both;
  line-height: 18px;
  font-size: 15px;
  padding: 8px;
  position: relative;
  margin: 8px 0;
  max-width: 85%;
  word-wrap: break-word;
  z-index: -1;
}

.message:after {
  position: absolute;
  content: "";
  width: 0;
  height: 0;
  border-style: solid;
}

.metadata {
  display: inline-block;
  float: right;
  padding: 0 0 0 7px;
  position: relative;
  bottom: -4px;
}



.metadata .time {
  color: rgba(0, 0, 0, .45);
  font-size: 11px;
  display: inline-block;
}

.metadata .tick {
  display: inline-block;
  margin-left: 2px;
  position: relative;
  top: 4px;
  height: 16px;
  width: 16px;
}

.metadata .tick svg {
  position: absolute;
  transition: .5s ease-in-out;
}

.metadata .tick svg:first-child {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: perspective(800px) rotateY(180deg);
          transform: perspective(800px) rotateY(180deg);
}

.metadata .tick svg:last-child {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transform: perspective(800px) rotateY(0deg);
          transform: perspective(800px) rotateY(0deg);
}
.metadata .tick-animation svg:first-child {
  -webkit-transform: perspective(800px) rotateY(0);
          transform: perspective(800px) rotateY(0);
}

.metadata .tick-animation svg:last-child {
  -webkit-transform: perspective(800px) rotateY(-179.9deg);
          transform: perspective(800px) rotateY(-179.9deg);
}

.message:first-child {
  margin: 16px 0 8px;
}

.message.received {
  background: #fff;
  border-radius: 0px 5px 5px 5px;
  float: left;
}

.message.received .metadata {
  padding: 0 0 0 16px;
}

.message.received:after {
  border-width: 0px 10px 10px 0;
  border-color: transparent #fff transparent transparent;
  top: 0;
  left: -10px;
}

.message.sent {
  background: #e1ffc7;
  border-radius: 5px 0px 5px 5px;
  float: right;
}

.message.sent:after {
  border-width: 0px 0 10px 10px;
  border-color: transparent transparent transparent #e1ffc7;
  top: 0;
  right: -10px;
}


/* Messages end */




.binput {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
    color: #000;
}

.binput:focus {
    border: 3px solid #555;
}

.bbutton {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  background-color: #142375;
}

.bbutton:hover {background-color:#080f35}

.bbutton:active {
  background-color: #080f35;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


.userscreen {
      display: inline-block;
  padding: 15px 25px;

  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  border: 5px;
  border-radius: 15px;
  box-shadow: 0 9px #999;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
      background: #1a598c;   

}