import React from 'react'
import "./Sidebar.css"
import SibarItem from "./SidebarItem"
import HomeOutlinedIcon from '@material-ui/icons/HomeOutlined';
import SubjectIcon from '@material-ui/icons/Subject';
import AssessmentOutlinedIcon from '@material-ui/icons/AssessmentOutlined';
import CreateOutlinedIcon from '@material-ui/icons/CreateOutlined';
import FastfoodOutlinedIcon from '@material-ui/icons/FastfoodOutlined';
import AccountBalanceWalletOutlinedIcon from '@material-ui/icons/AccountBalanceWalletOutlined';
import PeopleOutlineOutlinedIcon from '@material-ui/icons/PeopleOutlineOutlined';

function Sidebar() {
  return (
    <div className="Sidebar">
      <div className="Sidebar_logoContainer">
        <h1> Sedap <span>.</span></h1>
        <h6>Modern Admin Dashboard</h6>
      </div>

      <SibarItem
        Icon={HomeOutlinedIcon}
        text="Dashboard"
      />

      <SibarItem
        Icon={SubjectIcon}
        text="Order list"
      />

      <SibarItem
        Icon={PeopleOutlineOutlinedIcon}
        text="Customer"
        active="active"
      />

      <SibarItem
        Icon={AssessmentOutlinedIcon}
        text="Analytics"
      />

      <SibarItem
        Icon={CreateOutlinedIcon}
        text="Reviews"
      />

      <SibarItem
        Icon={FastfoodOutlinedIcon}
        text="Foods"
      />

      <SibarItem
        Icon={AccountBalanceWalletOutlinedIcon}
        text="Wallets"
      />
    </div>
  )
}

export default Sidebar
