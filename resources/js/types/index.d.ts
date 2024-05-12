import { Config } from 'ziggy-js';

export interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at: string;
}

export interface Flash {
    success: string;
    error: string;
    info: string;
    warning: string;

}

export interface Cart {
    count: number;
    total: number;
    items: Items[];
    products: any;
}

interface Items {
    product_id: number;
    quantity: number;
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auths: {
        user: User;
    };
    ziggy: Config & { location: string };
    flash: Flash;
    cart: Cart;
    auth: any;
};
