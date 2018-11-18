// Views - Buttons
import StandardButtons from '@/views/buttons/StandardButtons'
import ButtonGroups from '@/views/buttons/ButtonGroups'
import Dropdowns from '@/views/buttons/Dropdowns'
import SocialButtons from '@/views/buttons/SocialButtons'
import BrandButtons  from'@/views/buttons/BrandButtons'

export default {
    path: 'buttons',
    redirect: '/buttons/buttons',
    name: 'Buttons',
    component: {
        render(c) {
            return c('router-view')
        }
    },
    children: [
        {
            path: 'standard-buttons',
            name: 'Standard Buttons',
            component: StandardButtons,
        },
        {
            path: 'button-groups',
            name: 'Button Groups',
            component: ButtonGroups,
        },
        {
            path: 'dropdowns',
            name: 'Dropdowns',
            component: Dropdowns,
        },
        {
            path: 'social-buttons',
            name: 'Social Buttons',
            component: SocialButtons,
        },
        {
            path: 'brand-buttons',
            name: 'Brand Buttons',
            component: BrandButtons
        }
    ],
}
