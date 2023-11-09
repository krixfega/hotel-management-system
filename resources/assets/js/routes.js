
import BookingList from './components/Booking/BookingList.vue';
import ChannelList from './components/ChannelManager/ChannelList.vue';
import ChatWindow from './components/Chatbot/ChatWindow.vue';
import InventoryList from './components/Inventory/InventoryList.vue';
import PaymentForm from './components/PaymentConnections/PaymentForm.vue';
import RateChart from './components/RateAnalysis/RateChart.vue';
import RevenueDashboard from './components/RevenueManagement/RevenueDashboard.vue';
import WebsiteEditor from './components/WebsiteBuilder/WebsiteEditor.vue';

const routes = [
    { path: '/booking', component: BookingList },
    { path: '/channel-manager', component: ChannelList },
    { path: '/chatbot', component: ChatWindow },
    { path: '/inventory', component: InventoryList },
    { path: '/payment-connections', component: PaymentForm },
    { path: '/rate-analysis', component: RateChart },
    { path: '/revenue-management', component: RevenueDashboard },
    { path: '/website-builder', component: WebsiteEditor },
];

export default routes;
