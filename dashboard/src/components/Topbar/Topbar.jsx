import React from 'react'
import "./Topbar.css"
import user from "../../assets/images/user.jpg"
import NotificationsNoneIcon from '@material-ui/icons/NotificationsNone';
import RedeemIcon from '@material-ui/icons/Redeem';
import SettingsIcon from '@material-ui/icons/Settings';
import MessageIcon from '@material-ui/icons/Message';

import NotificationBadge from "../NotificationBadge/NotificationBadge"

import SearchIcon from '@material-ui/icons/Search';
function Topbar() {
  return (
    <div className="Topbar">
      <div className="Topbar__search">
        <input type="text" name="" placeholder="Search here" id="" />
        <SearchIcon />
      </div>
      <div className="Topbar__badge">
      <NotificationBadge
        Icon={NotificationsNoneIcon}
        background="#2D9CDB"
        color="rgb(45, 156, 219, 0.15)"
        count="12"
      />

      <NotificationBadge
        Icon={MessageIcon}
        background="#2D9CDB"
        color="rgb(45, 156, 219, 0.15)"
        count="5"
      />


      <NotificationBadge
        Icon={RedeemIcon}
        background="#5E6C93"
        color="rgb(94, 108, 147, 0.15)"
        count="5"
      />

      <NotificationBadge
        Icon={SettingsIcon}
        background="#FF5B5B"
        color="rgb(255, 91, 91,0.15)"
        count="12"
      />

      </div>
      <div className="Topbar__user">
        Hello, &nbsp; <span>Marius</span> 
        <img src={user} alt="" />
      </div> 
    </div>
  )
}

export default Topbar
