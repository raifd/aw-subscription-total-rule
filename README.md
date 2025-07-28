# AW Subscription Total Rule

Adds a new [AutomateWoo](https://woocommerce.com/products/automatewoo/) rule that compares the total value of a WooCommerce subscription. Built for merchants who want to automate workflows based on subscription revenue thresholds.

## 🚀 Features

- New rule: `Subscription – Subscription Total`
- Supports numeric comparisons (`greater than`, `less than`, `equal to`, etc.)
- Automatically available when the `subscription` object is in scope
- Fully compatible with High-Performance Order Storage (HPOS)

## 🛠 Usage

1. Activate the plugin in WordPress.
2. Create or edit an AutomateWoo workflow that uses a `subscription` object (e.g. “Subscription Created” or “Renewal Order Paid”).
3. Add a rule to your workflow.
4. Select:  
   **Rule Group**: Subscription  
   **Rule**: Subscription – Subscription Total

5. Choose a comparison and amount, such as:  
   - “is greater than” `100`  
   - “is less than or equal to” `49.99`

## 🧩 Example Workflow

**Trigger**: Subscription is renewed  
**Rule**: Subscription total is greater than $100  
**Action**: Send a thank-you email with an upsell offer

## 🔧 Installation

1. Upload the plugin folder to `/wp-content/plugins/`
2. Activate it via the WordPress admin
3. The rule will automatically be available in AutomateWoo when working with subscriptions

## 💡 Why This Exists

AutomateWoo doesn’t provide a built-in rule to compare a subscription’s total value. This plugin fills that gap, allowing merchants to create smart workflows based on what customers are actually paying.

## 🧠 Credits

Developed by [Raif Deari](https://github.com/raifd)  
Built with the help of [ChatGPT](https://openai.com/chatgpt) for prototyping, debugging, and WooCommerce integration guidance.

## 📄 License

This plugin is licensed under the [GNU General Public License v2.0 or later](https://www.gnu.org/licenses/gpl-2.0.html).
